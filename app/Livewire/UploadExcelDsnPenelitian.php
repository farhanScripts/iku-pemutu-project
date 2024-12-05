<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class UploadExcelDsnPenelitian extends Component
{
    use WithFileUploads;
    public $file;

    public function import(){
        $this->validate(['file'=>'required|mimes:xlsx, xls']);
        Excel::import($this->file, $this->file->getRealPath());

        $this->reset('file');
        session()->flash('message', 'Data berhasil di impor');
    }
    public function render()
    {
        return view('livewire.upload-excel-dsn-penelitian');
    }
}
