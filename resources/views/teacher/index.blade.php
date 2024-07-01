<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Pengajar</h3>
                <a href=""><img class="logoicon2" src="images/logo/robotickidz.png" alt="Logo" style="width: 90%; height:auto;"></a>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Pengajar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>

    <br>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pilihan Menu Pengajar</h4>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-4 mb-4">
                        <div class="box" style="border: 2px solid #ddd; padding: 20px; border-radius: 5px;">
                            <h5>Menu jadwal</h5>
                            <p>Content for box 1.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="box" style="border: 2px solid #ddd; padding: 20px; border-radius: 5px;">
                            <h5>Menu Progress murid</h5>
                            <p>Content for box 2.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>