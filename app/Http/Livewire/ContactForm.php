<?php

namespace App\Http\Livewire;

use Mail;
use App\Models\Message;
use Livewire\Component;

class ContactForm extends Component
{


    // public function view()
    // {
    //     return view ('contact-form');
    // }



    public $name;
    public $kelas;
    public $mapel;
    public $kategori;
    public $email;
    public $comment;
    public $success;
    protected $rules = [
        'name' => 'required',
        'kelas' => 'required',
        'mapel' => 'required',
        'kategori' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];

    public function contactFormSubmit()
    {
        $contact = $this->validate();
        Message::create([
            'nama' => $this->name,
                'kelas' => $this->kelas,
                'mapel' => $this->mapel,
                'kategori' => $this->kategori,
                'email' => $this->email,
                'message' => $this->comment,
        ]);

        $contact = $this->validate();
        if($this->kelas == '1 SMP'){
            Mail::send('email',
            array(
                'name' => $this->name,
                'kelas' => $this->kelas,
                'mapel' => $this->mapel,
                'kategori' => $this->kategori,
                'email' => $this->email,
                'comment' => $this->comment,
                ),
                function($message){
                    $message->from('nyantridulubarukerja@gmail.com', 'Flash');
                    $message->to('testinglaravel18@gmail.com', 'Khanif')->subject('Pesan Siswa');
                }
                

            );
            session()->flash('message', 'Berhasil,pesanmu sudah terkirim!');

            $this->success = 'Thank you for reaching out to us!';

            $this->clearFields();
        };

        if($this->kelas == '2 SMP'){
            Mail::send('email',
            array(
                'name' => $this->name,
                'kelas' => $this->kelas,
                'mapel' => $this->mapel,
                'kategori' => $this->kategori,
                'email' => $this->email,
                'comment' => $this->comment,
                ),
                function($message){
                    $message->from('testinglaravel18@gmail.com', 'Tugas');
                    $message->to('nyantridulubarukerja@gmail.com', 'Khanif')->subject('Pesan Siswa');
                }
                

            );
            session()->flash('message', 'Berhasil,pesanmu sudah terkirim!');

            $this->success = 'Thank you for reaching out to us!';

            $this->clearFields();
        };

        if($this->kelas == '3 SMP'){
            Mail::send('email',
            array(
                'name' => $this->name,
                'kelas' => $this->kelas,
                'mapel' => $this->mapel,
                'kategori' => $this->kategori,
                'email' => $this->email,
                'comment' => $this->comment,
                ),
                function($message){
                    $message->from('nyantridulubarukerja@gmail.com', 'Task');
                    $message->to('terusmelangkah00@gmail.com', 'Cek')->subject('Pesan Siswa');
                }
                

            );
            session()->flash('message', 'Berhasil,pesanmu sudah terkirim!');

            $this->success = 'Thank you for reaching out to us!';

            $this->clearFields();
        };
        
    }

    private function clearFields()
    {
        $this->name = '';
        $this->kelas = '';
        $this->mapel = '';
        $this->email = '';
        $this->comment = '';
    }

    public function render()
    {
        // $data = $this->name = '';
        //         $this->kelas = '';
        //         $this->email = '';
        //         $this->comment = '';
        
        return view('livewire.contact-form');
        
    }
}
