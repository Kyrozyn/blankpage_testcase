<?php

namespace App\Controllers;

use App\Models\MenuContent;
use App\Models\MenuFront;
use org\bovigo\vfs\vfsStreamContainerIterator;

class Investors extends BaseController
{
    public function index()
    {
        $menufront = new MenuFront();
        $menus = $menufront->findAll();
        if($menus){
            $id = $menus[0]['id'];
        }
        else{
            $id = null;
        }

        $with_id=false;
        return view('investors/index',compact('id','with_id','menus'));
    }

    public function index_with_id($id)
    {
        $menufront = new MenuFront();
        $menus = $menufront->findAll();
        $with_id=true;
        return view('investors/index',compact('id','with_id','menus'));
    }

    public function menu_list(){
        $menufront = new MenuFront();
        $menus = $menufront->findAll();
        return view('investors/admin_menu_list',compact('menus'));
    }

    public function menu_add(){
        return view('investors/admin_menu_form');
    }


    public function menu_edit($id){
        $menus = new MenuFront();
        $menu = $menus->find($id);
        return view('investors/admin_menu_form',compact('menu','id'));
    }

    public function menu_add_action(){
        $menufront = new MenuFront();
        $menufront->insert($_POST);
        $insert_id = $menufront->getInsertID();
        if(!$_POST['with_year']){
            $menucontent = new MenuContent();
            $menucontent->insert([
                'menufront_id' => $insert_id,
                'content' => "a",
            ]);
        }
        return redirect()->to(base_url('/investors/menu'))->with('success','Menu Berhasil Ditambah');
    }

    public function menu_edit_action(){
        $menufront = new MenuFront();
        $menufront->update($_POST['id'],['name' => $_POST['name']]);
        return redirect()->to(base_url('/investors/menu'))->with('success','Menu Berhasil Diedit');
    }

    public function menu_delete_action($id){
        $menufront = new MenuFront();
        $menufront->delete($id);
        return redirect()->to(base_url('/investors/menu'))->with('success','Menu Berhasil Dihapus');
    }

    public function content_list($menufront_id){
        $menucontent = new MenuContent();
        $MenuFront = new MenuFront();
        $datamenu = $MenuFront->where('id',$menufront_id)->first();
        if($datamenu['with_year']){
            $is_file = false;
            if($datamenu['category'] == 'File'){
                $is_file = true;
            }
            $contents = $menucontent->where(['menufront_id' => $menufront_id])->findAll();
            return view('investors/admin_content_list',compact('contents','is_file','menufront_id'));
        }
        else{
            $menucontent = new MenuContent();
            $menu_content = $menucontent->where('menufront_id',$menufront_id)->first();
            return redirect()->to(base_url('/investors/content/edit/'.$menu_content['id']))->with('no_year',1);
        }

    }

    public function content_editor($menufront_id){
        return view('investors/admin_content_editor',compact('menufront_id'));
    }

    public function content_editor_edit($menucontent_id){
        $menucontents = new MenuContent();
        $menucontent = $menucontents->where(['id' => $menucontent_id])->first();
        return view('investors/admin_content_editor',compact('menucontent'));
    }

    public function content_editor_action(){
        $content = $_POST['content'];
        $menufront_id = $_POST['menufront_id'];
        $year = $_POST['year'];
        $menucontent = new MenuContent();
        $menucontent->insert(['menufront_id' => $menufront_id, 'content' => $content, 'year' => $year]);
    }

    public function content_editor_edit_action(){
        $id = $_POST['id'];
        $content = $_POST['content'];
        $menufront_id = $_POST['menufront_id'];
        $year = $_POST['year'];
        $menucontent = new MenuContent();
        $menucontent->update($id,['content' => $content, 'year' => $year]);
    }

    public function content_delete($id){
        $menucontent = new MenuContent();
        $menucontent->delete($id);
        return redirect()->back()->with('success','Content Berhasil Dihapus');
    }

    public function content_file($menufront_id){
        return view('investors/admin_content_file',compact('menufront_id'));
    }

    public function content_file_action(){
        $file = $this->request->getFile('pdf_file');
        $newName = $file->getRandomName();
        $file->move(WRITEPATH.'uploads', $newName);
        $menufront_id = $_POST['menufront_id'];
        $year = $_POST['year'];
        $name = $_POST['name'];
        $menucontent = new MenuContent();
        $menucontent->insert(['menufront_id' => $menufront_id, 'content' => $newName, 'year' => $year,'name' => $name]);
        return redirect()->back()->with('success','Content Berhasil Ditambah');
    }

    public function download_file($id){
        $menucontent = new MenuContent();
        $menucontent = $menucontent->where(['id' => $id])->first();
        $file = WRITEPATH.'uploads/'.$menucontent['content'];
        echo $file;
        return $this->response->download($file,null);
    }

    public function post_without_year($menufront_id){
        $MenuContent = new MenuContent();
        $MenuFront = new MenuFront();
        $datamenu = $MenuFront->where('id',$menufront_id)->first();
        $datacontent = $MenuContent->where(['menufront_id' => $menufront_id])->findAll();
        $withyear = $datamenu['with_year'];
        $year = [];
        if($withyear){
            foreach ($datacontent as $data){
                if(!in_array($data['year'],$year)){
                    array_push($year,$data['year']);
                }
            }
        }
        else{
            return view('investors/render_content_html',compact('datacontent','datamenu','withyear'));
        }
        if($datamenu['category'] == 'File'){
            return view('investors/render_content_file',compact('datacontent','datamenu','year'));
        }
        else{
            $datacontent = [];
            return view('investors/render_content_html',compact('datacontent','datamenu','withyear','year'));
        }
    }

    public function post_year($menufront_id,$year){
        $MenuContent = new MenuContent();
        $MenuFront = new MenuFront();
        $datamenu = $MenuFront->where('id',$menufront_id)->first();
        $datacontent = $MenuContent->where(['menufront_id' => $menufront_id,'year' => $year])->findAll();
        $datacontent_all = $MenuContent->where(['menufront_id' => $menufront_id])->findAll();
        $withyear = $datamenu['with_year'];
        if($withyear){
            $year = [];
            foreach ($datacontent_all as $data){
                if(!in_array($data['year'],$year)){
                    array_push($year,$data['year']);
                }
            }
        }
        else{
            return view('investors/render_content_html',compact('datacontent','datamenu','withyear'));
        }
        if($datamenu['category'] == 'File'){
            return view('investors/render_content_file',compact('datacontent','datamenu','year'));
        }
        else{
            return view('investors/render_content_html',compact('datacontent','datamenu','withyear','year'));
        }
    }
}
