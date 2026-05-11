<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class tugasTest extends TestCase
{
    /**
     * user bisa melihat daftar tugas
     */
    public function test_user_bisa_melihat_daftar_tugas()
    {
        //setup
        $daftarTugas = Tugas::factory(10) ->create();

        //execution
        $response = $this->get('/tugas');

        //assert
        $response->assertOK();
        $response->assertSeeText($daftarTugas ->deskripsi);
    }
}
