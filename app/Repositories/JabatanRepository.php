<?php 

namespace App\Repositories;

use App\Models\Jabatan;

class JabatanRepository implements RepositoryInterface
{
    public function all()
    {
        return Jabatan::all();
    }

    public function find($id)
    {
        return Jabatan::find($id);
    }

    public function create(array $data)
    {
        return Jabatan::create($data);
    }

    public function update($id, array $data)
    {
        $jabatan = Jabatan::find($id);
        if ($jabatan) {
            $jabatan->update($data);
            return $jabatan;
        }
        return null;
    }

    public function delete($id)
    {
        $jabatan = Jabatan::find($id);
        if ($jabatan) {
            $jabatan->delete();
        }
    }

    public function listJabatan(){
        return Jabatan::select('id_jabatan','nama_jabatan')->get();
    }
}
