<?php 

namespace App\Repositories;

use App\Models\Cabang;

class CabangRepository implements RepositoryInterface
{
    public function all()
    {
        return Cabang::all();
    }

    public function find($id)
    {
        return Cabang::find($id);
    }

    public function create(array $data)
    {
        return Cabang::create($data);
    }

    public function update($id, array $data)
    {
        $cabang = Cabang::find($id);
        if ($cabang) {
            $cabang->update($data);
            return $cabang;
        }
        return null;
    }

    public function delete($id)
    {
        $cabang = Cabang::find($id);
        if ($cabang) {
            $cabang->delete();
        }
    }

    public function listCabang(){
        return Cabang::select('kode_cabang', 'id_vendor','vendor','latitude', 'longitude', 'alamat')->get();
    }
}
