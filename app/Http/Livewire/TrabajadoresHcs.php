<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Worker;
use Livewire\WithPagination;
use App\Models\jobs;

class TrabajadoresHcs extends Component
{
    use WithPagination;

    public
        $work_name,
        $work_ape_paterno,
        $work_ape_materno,
        $work_doc_identidad,
        $job_id,
        $nombre,
        $work_celular,
        $work_correo,
        $work_direccion,

        $post_id;

    public $action = "submit";

    public $search = '';

    public function render()
    {
        $jobs = jobs::all();

        $workers = Worker::orderBy('id', 'DESC')
            ->where('work_name', 'LIKE', "%{$this->search}%")
            ->orWhere('work_ape_paterno', 'LIKE', "%{$this->search}%")
            ->orWhere('work_ape_materno', 'LIKE', "%{$this->search}%")
            ->orWhere('work_doc_identidad', 'LIKE', "%{$this->search}%")
            ->orWhere('job_id', 'LIKE', "%{$this->search}%")
            ->orWhere('work_celular', 'LIKE', "%{$this->search}%")
            ->orWhere('work_correo', 'LIKE', "%{$this->search}%")
            ->paginate(10);

        return view('livewire.trabajadores-hcs', compact('workers', 'jobs'));
    }

    public function equis()
    {
        $this->search = '';
    }

    public function submit()
    {

        Worker::create([
            'work_name' => $this->work_name,
            'work_ape_paterno' => $this->work_ape_paterno,
            'work_ape_materno' => $this->work_ape_materno,
            'work_doc_identidad' => $this->work_doc_identidad,
            'job_id' => $this->job_id,
            'work_celular' => $this->work_celular,
            'work_correo' => $this->work_correo,
            'work_direccion' => $this->work_direccion
        ]);

        $this->reset([
            'work_name',
            'work_ape_paterno',
            'work_ape_materno',
            'work_doc_identidad',
            'job_id',
            'work_celular',
            'work_correo',
            'work_direccion'
        ]);
    }

    public function edit(Worker $post)
    {
        $this->work_name            = $post->work_name;
        $this->work_ape_paterno     = $post->work_ape_paterno;
        $this->work_ape_materno     = $post->work_ape_materno;
        $this->work_doc_identidad   = $post->work_doc_identidad;
        $this->job_id               = $post->job_id;
        $this->nombre               = $post->nombre;
        $this->work_celular         = $post->work_celular;
        $this->work_correo          = $post->work_correo;
        $this->work_direccion       = $post->work_direccion;
        $this->post_id              = $post->id;

        $this->action = "update";
    }

    public function update()
    {
        $workers = Worker::find($this->post_id);

        $workers->update([
            'work_name' => $this->work_name,
            'work_ape_paterno' => $this->work_ape_paterno,
            'work_ape_materno' => $this->work_ape_materno,
            'work_doc_identidad' => $this->work_doc_identidad,
            'job_id' => $this->job_id,
            'work_celular' => $this->work_celular,
            'work_correo' => $this->work_correo,
            'work_direccion' => $this->work_direccion,
            'post_id' => $this->id
        ]);

        $this->reset([
            'work_name',
            'work_ape_paterno',
            'work_ape_materno',
            'work_doc_identidad',
            'job_id',
            'work_celular',
            'work_correo',
            'work_direccion',
            'post_id'
        ]);
    }

    public function restore()
    {
        $this->reset([
            'work_name',
            'work_ape_paterno',
            'work_ape_materno',
            'work_doc_identidad',
            'job_id',
            'work_celular',
            'work_correo',
            'work_direccion',
            'post_id'
        ]);
    }

    public function destroy($id)
    {
        Worker::destroy($id);
    }
}
