<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Promociones;

class Promocion extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Promociones $promociones)
    {
        //
        $this->promociones = $promociones;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('carlosgomezcarrillo827@gmail.com', 'Example')->view('email.email')->with([
            'asunto' => $this->promociones->asunto,
            'descripcion' => $this->promociones->descripcion,
        ]);;
    }
}
