<?php

namespace Modules\dashboard\Controllers;

use Modules\dashboard\Controllers\Dashboard;

class Berita extends Dashboard
{

    protected $Berita;
    public function __construct()
    {
        parent::__construct();
        $this->getBerita();
    }

    public function index()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }
        $this->rander(view("$this->view\content\berita"));
    }

    public function kutip()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }
        $this->rander(view("$this->view\berita\kutip_berita"));
    }


    public function getBerita()
    {
        $berita = $this->BeritaModel->where('type', 'berita')->orWhere('type', 'artikel')->findAll();
        $array = [];
        foreach ($berita as $b) {
            $array[$b['id']] = $b;
        }
        $this->Berita = $array;
    }

    public function list_kutip_berita()
    {
        $list_array = [];
        $kutip = $this->BeritaModel->where('type', 'kutip')->findAll();
        if ($this->Berita) {
            foreach ($kutip as $b) {
                $list_array[] = [
                    '<img class="img-thumbnail" src="' . $b['thumbnail'] . '" alt="gambar" sizes="" srcset="" style="width:200px">',
                    $b['judul'],
                    $b['penulis'],
                    form_button(['type' => 'button', 'class' => 'btn btn-sm btn-success', 'onclick' => 'edit(' . $b['id'] . ')'], 'Edit <i class="fa-solid fa-pen-to-square"></i>') . form_button(['type' => 'button', 'class' => 'btn btn-sm btn-danger', 'onclick' => 'modalHapus(' . $b['id'] . ')'], 'Hapus <i class="fa-solid fa-trash"></i>')
                ];
            }
        }

        $data['data'] = $list_array;
        echo json_encode($data);
    }
    public function list_berita()
    {
        $list_array = [];
        if ($this->Berita) {
            foreach ($this->Berita as $b) {
                $list_array[] = [
                    '<img class="img-thumbnail" src="' . base_url('upload/' . $b['thumbnail']) . '" alt="gambar" sizes="" srcset="" style="width:200px">',
                    $b['judul'],
                    $b['penulis'],
                    $b['type'],
                    form_button(['type' => 'button', 'class' => 'btn btn-sm btn-success', 'onclick' => 'edit(' . $b['id'] . ')'], 'Edit <i class="fa-solid fa-pen-to-square"></i>') . form_button(['type' => 'button', 'class' => 'btn btn-sm btn-danger', 'onclick' => 'modalHapus(' . $b['id'] . ')'], 'Hapus <i class="fa-solid fa-trash"></i>')
                ];
            }
        }

        $data['data'] = $list_array;
        echo json_encode($data);
    }

    public function tambahBerita()
    {
        echo view("$this->view\berita\\tambah_berita");
    }
    public function tambahKutipBerita()
    {
        echo view("$this->view\berita\\tambah_kutip_berita");
    }

    public function editBerita($id)
    {
        $data = [
            'berita' => $this->Berita[$id]
        ];
        echo view("$this->view\berita\\edit_berita", $data);
    }
    public function editKutipBerita($id)
    {
        $data = [
            'berita' => $this->BeritaModel->find($id)
        ];
        echo view("$this->view\berita\\edit_kutip_berita", $data);
    }

    public function save($type)
    {
        if ($type == 'tulis') {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'penulis' => $this->request->getPost('penulis'),
                'type' => $this->request->getPost('type'),
                'isi' => $this->request->getPost('isi'),
                'create_at' => date('Y-m-d H:i:s')
            ];
            $foto = $this->request->getFile('thumbnail');
            if (!$foto->hasMoved()) {
                $name = $foto->getRandomName();
                $foto->move('../public/upload', $name);
                $data['thumbnail'] = $name;
            }
            if ($this->BeritaModel->save($data)) {
                return redirect()->to('berita');
            }
        } else if ($type == 'kutip') {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'penulis' => $this->request->getPost('penulis'),
                'thumbnail' => $this->request->getPost('thumbnail'),
                'type' => 'kutip',
                'create_at' => date('Y-m-d H:i:s')
            ];
            if ($this->BeritaModel->save($data)) {
                return redirect()->to('berita/kutip');
            }
        }
    }
    public function update($type)
    {
        $id = $this->request->getPost('id');
        if ($type == 'tulis') {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'penulis' => $this->request->getPost('penulis'),
                'isi' => $this->request->getPost('isi'),
            ];
            $foto = $this->request->getFile('thumbnail');
            if ($foto->isValid()) {
                if (!$foto->hasMoved()) {
                    $name = $foto->getRandomName();
                    $foto->move('../public/upload', $name);
                    $data['thumbnail'] = $name;
                }
            }
            if ($this->BeritaModel->update($id, $data)) {
                return redirect()->to('berita');
            }
        } else if ($type == 'kutip') {
            $data = [
                'judul' => $this->request->getPost('judul'),
                'penulis' => $this->request->getPost('penulis'),
                'thumbnail' => $this->request->getPost('thumbnail')
            ];
            if ($this->BeritaModel->update($id, $data)) {
                return redirect()->to('berita/kutip');
            }
        }
    }

    public function modalHapus($id)
    {
        return $this->modal(
            'Hapus Berita',
            'Apakah Anda yakin menghapus Berita ?',
            "deleteBerita(" . $id . ")",
            'danger',
            'Hapus <i class="fa-solid fa-trash"></i>',
            'modal-sm'
        );
    }

    public function alertSave()
    {
        return $this->modal(
            'Tambah Berita',
            'Tambah Berita ?',
            "save()",
            'primary',
            'Simpan',
            'modal-sm'
        );
    }

    public function hapus($id)
    {
        if ($this->BeritaModel->delete($id) == 1) {
            return "sucess";
        }
    }
}
