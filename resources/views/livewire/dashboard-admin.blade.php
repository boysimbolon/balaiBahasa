@section('title', $title)
<x-app-layout>
    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 items-end">
        <div class="col-span-1 xl:col-span-3">
            <div class="box pull-up">
                <div class="box-body lg:p-0">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 items-center">
                        <div><img src="../../../images/svg-icon/color-svg/custom-14.svg" alt=""></div>
                        <div class="col-span-1 lg:col-span-3">
                            <div class="text-3xl xl:text-4xl text-primary mb-15">Hello {{ $data->nama }}, Welcome Back!</div>
                            <p class="text-dark text-lg mb-0">
                                Your course Overcoming the fear of public speaking was completed by 11 New users this week!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <div class="card">
                <div class="card-header">
                    <div class="text-xl font-medium mb-0">Peserta</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table" style="width:100%">
                            <thead>
                            <tr class="border-b">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Instansi</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody class="text-fade">
                            <tr class="border-b">
                                <td ><img src="../../../images/avatar/avatar-2.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td >Garrett Winters</td>
                                <td >Good Guys</td>
                                <td >garrett@winters.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b ">
                                <td><img src="../../../images/avatar/avatar-1.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Ashton Cox</td>
                                <td>Levitz Furniture</td>
                                <td>ashton@cox.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-8.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Sonya Frost</td>
                                <td>Child World</td>
                                <td>sonya@frost.com</td>
                                <td><span class="badge bg-danger-light p-2">Deleted</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-4.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Jena Gaines</td>
                                <td>Helping Hand</td>
                                <td>jena@gaines.com</td>
                                <td><span class="badge bg-warning-light p-2">Inactive</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-15.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Quinn Flynn</td>
                                <td>Good Guys</td>
                                <td>quinn@flynn.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-12.png p-2" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Charde Marshall</td>
                                <td>Price Savers</td>
                                <td>charde@marshall.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-10.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Haley Kennedy</td>
                                <td>Helping Hand</td>
                                <td>haley@kennedy.com</td>
                                <td><span class="badge bg-danger-light p-2">Deleted</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-9.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Good Guys</td>
                                <td>tatyana@fitzpatrick.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-8.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Michael Silva</td>
                                <td>Red Robin Stores</td>
                                <td>michael@silva.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-7.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Yuri Berry</td>
                                <td>The Wiz</td>
                                <td>yuri@berry.com</td>
                                <td><span class="badge bg-danger-light p-2">Deleted</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-5.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Doris Wilder</td>
                                <td>Red Robin Stores</td>
                                <td>doris@wilder.com</td>
                                <td><span class="badge bg-warning-light p-2">Inactive</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-3.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Angelica Ramos</td>
                                <td>The Wiz</td>
                                <td>angelica@ramos.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-4.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Jennifer Chang</td>
                                <td>Helping Hand</td>
                                <td>jennifer@chang.com</td>
                                <td><span class="badge bg-warning-light p-2">Inactive</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-2.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Brenden Wagner</td>
                                <td>The Wiz</td>
                                <td>brenden@wagner.com</td>
                                <td><span class="badge bg-warning-light p-2">Inactive</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-16.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Fiona Green</td>
                                <td>The Sample</td>
                                <td>fiona@green.com</td>
                                <td><span class="badge bg-warning-light p-2">Inactive</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-15.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Suki Burks</td>
                                <td>The Sample</td>
                                <td>suki@burks.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-13.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Prescott Bartlett</td>
                                <td>The Sample</td>
                                <td>prescott@bartlett.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-12.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Gavin Cortez</td>
                                <td>Red Robin Stores</td>
                                <td>gavin@cortez.com</td>
                                <td><span class="badge bg-success-light p-2">Active</span></td>
                            </tr>
                            <tr class="border-b">
                                <td><img src="../../../images/avatar/avatar-11.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Unity Butler</td>
                                <td>Price Savers</td>
                                <td>unity@butler.com</td>
                                <td><span class="badge bg-warning-light p-2">Inactive</span></td>
                            </tr>
                            <tr >
                                <td><img src="../../../images/avatar/avatar-10.png" width="32" height="32" class="bg-light rounded-full my-n1" alt="Avatar"></td>
                                <td>Howard Hatfield</td>
                                <td>Price Savers</td>
                                <td>howard@hatfield.com</td>
                                <td><span class="badge bg-warning-light p-2">Inactive</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title text-xl font-medium">List Ruangan</h4>
                </div>
                <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">
                        <a class="media media-single" href="#">
                            <i data-feather="list"></i>
                            <span class="title text-mute">Ruangan 1</span>
                        </a>
                        <a class="media media-single" href="#">
                            <i data-feather="list"></i>
                            <span class="title text-mute">Ruangan 2</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title text-xl font-medium">List Tipe Ujian</h4>
                </div>
                <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">
                        <a class="media media-single" href="#">
                            <i data-feather="edit"></i>
                            <span class="title text-mute">Tipe Ujian 1</span>
                        </a>
                        <a class="media media-single" href="#">
                            <i data-feather="edit"></i>
                            <span class="title text-mute">Tipe Ujian 2</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <div class="card">
                <div class="card-header">
                    <div class="text-xl font-medium mb-0">Daftar Ujian</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table" style="width:100%">
                            <thead>
                            <tr class="border-b">
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Tipe Ujian</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Kuota</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                            <tbody class="text-fade">
                            <tr class="border-b">
                                <td class="text-center">#</td>
                                <td>Tanggal 1</td>
                                <td>Tipe Ujian 1</td>
                                <td class="text-center">Jam 1</td>
                                <td>Lokasi 1</td>
                                <td class="text-center">Kuota 1</td>
                                <td class="text-center">Jumlah 1</td>
                            </tr>
                            <tr class="border-b">
                                <td class="text-center">#</td>
                                <td>Tanggal 2</td>
                                <td>Tipe Ujian 2</td>
                                <td class="text-center">Jam 2</td>
                                <td>Lokasi 2</td>
                                <td class="text-center">Kuota 2</td>
                                <td class="text-center">Jumlah 2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
        </div>
    </div>
</x-app-layout>
