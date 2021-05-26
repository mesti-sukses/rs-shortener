<?php
    class Tampilan
    {
        function login($f3){
            $cook = $f3->get('SESSION.login');
            if($cook != md5('admin')){
                echo Template::instance()->render('view/login.html');
            } else {
                $f3->reroute('admin');
            }
        }

        function info($f3){
            $urlData = $f3->get('DB')->exec("SELECT * FROM redirect");

            $f3->set('urlData', $urlData);
            echo Template::instance()->render('view/linktree.html');
        }

        function redirect($f3){
            $slug = $f3->get('PARAMS.slug');
            $urlData = $f3->get('DB')->exec("SELECT * FROM redirect WHERE slug='".$slug."'");
            $urlData[0]['statistik'] += 1;
            $query = "UPDATE redirect SET ";
            foreach ($urlData[0] as $key => $value) {
                $query .= $key." = '".$value."', ";
            }
            $query = substr($query, 0, -2);
            $query .= " WHERE id=".$urlData[0]['id'];
            $f3->get('DB')->exec($query);
            // echo $query;
            header("Location:".$urlData[0]['url']);
        }
    }

    class Input 
    {
        function login($f3){
            $username = $f3->get('POST.username');
            $password = md5($f3->get('POST.password'));
            
            $this->loginControl($f3, $username, $password);

            $f3->reroute('/admin');
        }

        function loginControl($f3, $username, $password){
            if($password == "06f1585f878c2bb3ba1a7769b839daf5" && $username == "RuangSeminar")
            {
                $f3->set('SESSION.login', md5('admin'));
                return TRUE;
            } else
                return FALSE;
        }

        function simpan($f3){
            $slug = $f3->get('POST.slug');
            $url = $f3->get('POST.url');
            $judul = $f3->get('POST.judul');
            $id = $f3->get('POST.id');
            if($id == ""){
                // Save
                $query = "INSERT INTO redirect(judul,slug, url) VALUES('".$judul."','".$slug."','".$url."')";
                $urlData = $f3->get('DB')->exec($query);
                $f3->reroute('/admin');
            } else {
                // Update
                $query = "UPDATE redirect SET judul='".$judul."', slug='".$slug."', url='".$url."' WHERE id=".$id;
                $urlData = $f3->get('DB')->exec($query);
                $f3->reroute('/admin/edit/'.$id);
            }
        }
    }

    class Admin
    {
        function index($f3){
            $cook = $f3->get('SESSION.login');
            if($cook != md5('admin')){
                $f3->reroute('/');
            } else {
                $urlData = $f3->get('DB')->exec("SELECT * FROM redirect");

                $f3->set('urlData', $urlData);
                echo Template::instance()->render('view/admin.html');
            }
        }
        
        function edit($f3){
            $cook = $f3->get('SESSION.login');
            $id = $f3->get('PARAMS.id');
            if($cook != md5('admin')){
                $f3->reroute('/');
            } else {
                $urlData = $f3->get('DB')->exec("SELECT * FROM redirect");
                $currentURLData = $f3->get('DB')->exec("SELECT * FROM redirect WHERE id=".$id);

                $f3->set('urlData', $urlData);
                $f3->set('currentData', $currentURLData);
                echo Template::instance()->render('view/admin.html');
            }
        }

        function logout($f3){
            $f3->clear('SESSION');
            $f3->reroute('/');
        }
    }
?>