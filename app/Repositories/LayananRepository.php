<?php 

namespace App\Repositories;

use App\Models\Layanan;

class LayananRepository implements RepositoryInterface
{
    public function all()
    {
        return Layanan::all();
    }

    public function find($id)
    {
        return Layanan::find($id);
    }

    public function create(array $data)
    {
        return Layanan::create($data);
    }

    public function update($id, array $data)
    {
        $layanan = Layanan::find($id);
        if ($layanan) {
            $layanan->update($data);
            return $layanan;
        }
        return null;
    }

    public function delete($id)
    {
        $layanan = Layanan::find($id);
        if ($layanan) {
            $layanan->delete();
        }
    }

    public function listLayanan($request){
        return Layanan::select('kode_layanan', 'nama_layanan')->where('jabatan_id',$request->id_jabatan)->get();
    }
}
