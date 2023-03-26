<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        
        
        $this->seed(RegisterSuratMasukCRUDDataDeleted::class);
        
        
        
        
        $this->seed(KategoriSuratCRUDDataDeleted::class);
        
        
        
        
        $this->seed(SuratPerintahTugasCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        $this->seed(JaksaCRUDDataDeleted::class);
        $this->seed(SuratPpsCRUDDataDeleted::class);
        
        
        
        
        
        
        
        
        
        
        
        
        $this->seed(SuratPerintahTugasCRUDDataTypeAdded::class);
        $this->seed(SuratPerintahTugasCRUDDataRowAdded::class);
        $this->seed(AnalisaTugasCRUDDataDeleted::class);
        $this->seed(AnalisaSasaranCRUDDataDeleted::class);
        $this->seed(SuratPerintahOperasiCRUDDataDeleted::class);
        $this->seed(SuratPpsCRUDDataTypeAdded::class);
        $this->seed(SuratPpsCRUDDataRowAdded::class);
        $this->seed(SuratPerintahOperasiCRUDDataTypeAdded::class);
        $this->seed(SuratPerintahOperasiCRUDDataRowAdded::class);
        $this->seed(AnalisaSasaranCRUDDataTypeAdded::class);
        $this->seed(AnalisaSasaranCRUDDataRowAdded::class);
        $this->seed(AnalisaTugasCRUDDataTypeAdded::class);
        $this->seed(AnalisaTugasCRUDDataRowAdded::class);
        $this->seed(TargetOperasiCRUDDataTypeAdded::class);
        $this->seed(TargetOperasiCRUDDataRowAdded::class);
        $this->seed(RencanaPenyelidikanCRUDDataTypeAdded::class);
        $this->seed(RencanaPenyelidikanCRUDDataRowAdded::class);
        $this->seed(RencanaPamgalCRUDDataTypeAdded::class);
        $this->seed(RencanaPamgalCRUDDataRowAdded::class);
        $this->seed(SuratPermintaanKeteranganCRUDDataTypeAdded::class);
        $this->seed(SuratPermintaanKeteranganCRUDDataRowAdded::class);
        $this->seed(BeritaAcaraCRUDDataTypeAdded::class);
        $this->seed(BeritaAcaraCRUDDataRowAdded::class);
        $this->seed(CatatanWawancaraCRUDDataTypeAdded::class);
        $this->seed(CatatanWawancaraCRUDDataRowAdded::class);
    }
}
