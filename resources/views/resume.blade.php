@extends('layouts.main')

@section('container')
    <!-- Page Content-->
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Work Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary px-4 py-3" href="#!">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>
                    </div>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Jul 2023 - Aug 2023</div>
                                        <div class="small fw-bolder">Back-End Developer</div>
                                        <div class="small text-muted">Digital Kode</div>
                                        <div class="small text-muted">Sukabumi City, West Java</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>
                                    
                                    <ul>
                                        <li>Developed the dzikirpop application using PHP, JavaScript, MySQL, and RestAPI.</li>
                                        <li>Collaborated with HMTI to develop the HMTI website using Laravel and Tailwind, and implemented features that include user 
                                            authentication and authorization.
                                            </li>
                                        <li>Developed the Pondok Pesantren As-salam wali santri visitation system using native PHP and MySQL.</li>
                                        <li>Developed the Permata Hati Home Schooling Information System on the psychotest menu for students. Features implemented 
                                            include question creation, answer assessment, and result reporting.</li>
                                    </ul>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Card 2-->
                    {{-- <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">2017 - 2019</div>
                                        <div class="small fw-bolder">SEM Specialist</div>
                                        <div class="small text-muted">Wayne Enterprises</div>
                                        <div class="small text-muted">Gotham City, NY</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                            </div>
                        </div>
                    </div> --}}
                </section>
                {{-- Organization Experience --}}
                {{-- <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Organisational Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary px-4 py-3" href="#!">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>
                    </div>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">May 2023 - Jul 2023</div>
                                        <div class="small fw-bolder">Treasurer of COMPEX 2023</div>
                                        <div class="small text-muted">Himpunan Mahasiswa Teknik Informatika (HMTI)</div>
                                        <div class="small text-muted">Sukabumi, West Java</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>
                                    <ul>
                                        <li>Managed finances, developed budget, and created financial reports.</li>
                                        <li>Sought sponsors to improve financial management efficiency, reduce costs, and increase profit.</li>
                                    </ul>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Aug 2023 - Sept 2023</div>
                                        <div class="small fw-bolder">Secretary for KKN</div>
                                        <div class="small text-muted">Nusa Putra University</div>
                                        <div class="small text-muted">Sukabumi, West Java</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>
                                    <ul>
                                        <li>Create and manage documents related to the Community Service Program (Kuliah Kerja Nyata or KKN), including correspondence, 
                                            reports, and supporting data.
                                            </li>
                                        <li>Assist the KKN coordinator in preparing and implementing KKN activities.</li>
                                        <li>Maintain communication with relevant parties, such as supervising professors, the community, and relevant institutions.
                                        </li>
                                    </ul>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2021 - Present</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Nusa Putra University</div>
                                            <div class="small text-muted">Sukabumi, West Java</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Bachelor Degree</div>
                                            <div class="small text-muted">Informatics Engineering</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                            </div>
                        </div>
                    </div>
                    <!-- Education Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2018 - 2021</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">SMK YASPIM</div>
                                            <div class="small text-muted">Sukabumi, West Java</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">HIigh School Diploma</div>
                                            <div class="small text-muted">Software Engineering</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            {{-- <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Artifial Intellegence</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Statistical Analysis</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div></div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Mobile Development</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div></div>
                                </div>
                            </div> --}}
                            <!-- Languages list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div></div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Java</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MySQL</div></div>
                                </div>
                            </div>
                            <!-- Framework list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Framework</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CodeIgniter</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Tailwind</div></div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bootstrap</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Vue JS</div></div>
                                    {{-- <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MySQL</div></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection