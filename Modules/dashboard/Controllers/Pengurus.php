<?php

namespace Modules\dashboard\Controllers;

use Modules\dashboard\Controllers\Dashboard;

class Pengurus extends Dashboard
{
    protected $kepengurusan;
    protected $bph;
    protected $AnggotaSie;
    protected $KoordinatorSie;
    protected $sie;
    public function __construct()
    {
        parent::__construct();
        $this->getKepengurusan();
        $this->getBph();
        $this->getAnggotaSie();
        $this->getKoordinatorSie();
        $this->getSie();
    }

    public function index()
    {
        if (!$this->ionAuth->loggedIn()) {
            return redirect()->to('/auth/login');
        }

        $data = [
            'ketua' => $this->bph[2]['nama'],
            'ketuaI' => $this->bph[3]['nama'],
            'ketuaII' => $this->bph[4]['nama'],
            'sekretaris' => $this->bph[5]['nama'],
            'sekretarisI' => $this->bph[6]['nama'],
            'sekretarisII' => $this->bph[7]['nama'],
            'bendahara' => $this->bph[8]['nama'],
            'bendaharaI' => $this->bph[9]['nama'],
            'anggotaSie' => $this->AnggotaSie,
            'koordinatorSie' => $this->KoordinatorSie,
            'sie' => $this->sie,
        ];

        $this->rander(view("$this->view\content\pengurus", $data));
    }

    public function modalSave($type)
    {
        $data = [];
        if ($type == 'ketua') {
            $id_kepengurusan = 2;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        } else if ($type == 'ketua1') {
            $id_kepengurusan = 3;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        } else if ($type == 'ketua2') {
            $id_kepengurusan = 4;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        } else if ($type == 'sekretaris') {
            $id_kepengurusan = 5;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        } else if ($type == 'sekretaris1') {
            $id_kepengurusan = 6;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        } else if ($type == 'sekretaris2') {
            $id_kepengurusan = 7;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        } else if ($type == 'bendahara') {
            $id_kepengurusan = 8;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        } else if ($type == 'bendahara1') {
            $id_kepengurusan = 9;
            $data = [
                'kepengurusan' => $id_kepengurusan,
                'jabatan' => 'bph',
                'kepengurusan_text' => $this->kepengurusan[$id_kepengurusan]['jabatan']
            ];
            $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
            if ($cekKetua == 0) {
                $data['type'] = 'create';
            } else {
                $data['type'] = 'update';
                $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
            }
        }
        return $this->modal(
            'Edit Pengurus',
            view("$this->view\\form\\form_edit_pengurus", $data),
            'save()',
            'primary',
            'simpan',
            'modal-lg'
        );
    }

    public function save()
    {
        $data[] = [];
        $type = $this->request->getPost('type');
        $kepengurusan = $this->request->getPost('kepengurusan');
        $nama = $this->request->getPost('nama');
        $jabatan = $this->request->getPost('jabatan');
        $alamat = $this->request->getPost('alamat');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tanggal_lahir = $this->request->getPost('tanggal_lahir');
        $medsos = $this->request->getPost('medsos');
        $data = [
            'nama' => $nama,
            'kepengurusan' => $kepengurusan,
            'jabatan' => $jabatan,
            'alamat' => $alamat,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'medsos' => $medsos,
        ];
        $file = $this->request->getFile('foto');
        if ($file->getName() != "") {
            if (!$file->hasMoved()) {
                $name = $file->getRandomName();
                $file->move('../public/upload', $name);
                $data['foto'] = $name;
            }
        }
        if ($type == 'create') {
            if (!$this->AnggotaModel->save($data)) {
                echo "gagal";
            }
            return redirect()->to('pengurus');
        } else {
            $id = $this->request->getPost('id');
            $this->AnggotaModel->update($id, $data);
            return redirect()->to('pengurus');
        }
    }

    public function modalSaveKoordinator($id_kepengurusan)
    {
        $data = [
            'kepengurusan' => $id_kepengurusan,
            'jabatan' => 'koordinator',
            'kepengurusan_text' => 'Koordinator ' . $this->kepengurusan[$id_kepengurusan]['jabatan']
        ];
        $cekKetua = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->countAllResults();
        if ($cekKetua == 0) {
            $data['type'] = 'create';
        } else {
            $data['type'] = 'update';
            $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->findAll(1)[0];
        }
        return $this->modal(
            'Edit Pengurus',
            view("$this->view\\form\\form_edit_pengurus", $data),
            'save()',
            'primary',
            'simpan',
            'modal-lg'
        );
    }

    public function modalSaveAnggota($id_kepengurusan, $type, $id_anggota = NULL)
    {
        $data = [
            'kepengurusan' => $id_kepengurusan,
            'jabatan' => 'Anggota',
            'kepengurusan_text' => 'Anggota ' . $this->kepengurusan[$id_kepengurusan]['jabatan']
        ];
        if ($type == 'create') {
            $judul = "Tambah Pengurus";
            $data['type'] = 'create';
        } else {
            $judul = "Edit Pengurus";
            $data['type'] = 'update';
            $data['anggota'] = $this->AnggotaModel->where('kepengurusan', $id_kepengurusan)->find($id_anggota);
        }
        return $this->modal(
            $judul,
            view("$this->view\\form\\form_edit_pengurus", $data),
            'save()',
            'primary',
            'simpan',
            'modal-lg'
        );
    }

    public function modalDeleteAnggota($id)
    {
        return $this->modal(
            'Hapus Anggota',
            'Apakah anda yakin menghapus anggota ?',
            'deleteAnggota(' . $id . ')',
            'danger',
            'hapus'
        );
    }

    public function deleteAnggota($id)
    {
        $foto = $this->AnggotaModel->select('foto')->find($id)['foto'];
        $path = 'upload/' . $foto;
        unlink($path);

        if ($this->AnggotaModel->delete($id)) {
            echo json_encode(['message' => 'sucess']);
        };
        // return redirect()->to('pengurus');
    }

    public function getKepengurusan()
    {
        $kep = $this->KepengurusanModel->findAll();
        $array = [];
        foreach ($kep as $k) {
            $array[$k['id']] = $k;
        }

        $this->kepengurusan = $array;
        // dd($array);
    }

    public function getBph()
    {
        // dd($this->AnggotaModel->where('jabatan', 'bph')->findAll());
        $bph = ($this->AnggotaModel->where('jabatan', 'bph')->findAll());
        $array = [];
        foreach ($bph as $b) {
            $array[$b['kepengurusan']] = $b;
        }

        $this->bph = $array;
    }

    public function getAnggotaSie()
    {
        $sie = $this->AnggotaModel->Where('jabatan', 'anggota')->findAll();
        $array = [];
        if ($sie) {
            foreach ($sie as $s) {
                $array[$s['id']] = $s;
            }
        }
        $this->AnggotaSie = $array;
    }
    public function getKoordinatorSie()
    {
        $sie = $this->AnggotaModel->Where('jabatan', 'koordinator')->findAll();
        $array = [];
        if ($sie) {
            foreach ($sie as $s) {
                $array[$s['kepengurusan']] = $s;
            }
        }
        $this->KoordinatorSie = $array;
    }



    public function getSie()
    {
        $sie = $this->KepengurusanModel->where('type', 'sie')->findAll();
        $array = [];
        if ($sie) {
            foreach ($sie as $s) {
                $array[$s['id']] = $s;
            }
        }
        $this->sie = $array;
    }
}
