<x-layout>
<x-navbar/>
<div class="container-fluid bg-white pt-3">
    <h1 class="h1-welcome bold display-4 text-center text-dark mt-4">Skills</h1>

    <section >
        <div class="container-fluid">
            <div class="row">
                {{-- html-css-bootstrap --}}
                <div class="col-12 col-md-4">
                        <div class="card skill-card h-100">
                            <div class="card-body shadow ">
                                <h3 class="card-title card-title-skills bold text-center"> <span class="color-html">HTML</span> & <span class="color-css">CSS</span> (<span class="color-bootstrap">BOOTSTRAP</span>)</h3>
                                <div class="skill-progress mb-3">
                                    <div class="progress">
                                        <div class="progress-bar color-html bg-html" style="width: 98%">98%</div>
                                    </div>
                                </div>
                                <ul class="list-unstyled py-3 align">
                                    <hr>
                                    <li class="li-card-skills bold "> Semantic HTML5.</li>
                                    <li class="li-card-skills bold"> Box models.</li>
                                    <li class="li-card-skills bold"> Flexbox.</li>
                                    <li class="li-card-skills bold"> Media Queries.</li>
                                    <li class="li-card-skills bold"> CSS Positioning.</li>
                                    <li class="li-card-skills bold"> CSS Animation.</li>
                                </ul>
                            </div>
                        </div>
                </div>
                {{-- javascript --}}
                <div class="col-12 col-md-4">
                    <div class="card skill-card h-100">
                        <div class="card-body shadow">
                            <h3 class="card-title card-title-skills bold text-center"> <span class="color-javascript">JAVASCRIPT</span></h3>
                            <div class="skill-progress mb-3">
                                <div class="progress">
                                    <div class="progress-bar bg-javascript " style="width: 85%; color:black" >85%</div>
                                </div>
                            </div>
                            <ul class="list-unstyled py-3 align">
                                <hr>
                                <li class="li-card-skills bold">Variables.</li>
                                <li class="li-card-skills bold">Data Types.</li>
                                <li class="li-card-skills bold">Operators.</li>
                                <li class="li-card-skills bold">Loops.</li>
                                <li class="li-card-skills bold">Conditions.</li>
                                <li class="li-card-skills bold">Arrays.</li>
                                <li class="li-card-skills bold">Functions.</li>
                                <li class="li-card-skills bold">Objects.</li>
                                <li class="li-card-skills bold">DOM.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- php --}}
                <div class="col-12 col-md-4">
                    <div class="card skill-card h-100">
                        <div class="card-body shadow">
                            <h3 class="card-title card-title-skills bold text-center"> <span class="color-php">PHP</span></h3>
                            <div class="skill-progress mb-3">
                                <div class="progress">
                                    <div class="progress-bar bg-php " style="width: 75%">75%</div>
                                </div>
                            </div>
                            <ul class="list-unstyled py-3 align bold">
                                <hr>
                                <li class="li-card-skills">Variables.</li>
                                <li class="li-card-skills">Data Types.</li>
                                <li class="li-card-skills">Debugging techniques.</li>
                                <li class="li-card-skills">Arrays.</li>
                                <li class="li-card-skills">Build-in functions.</li>
                                <li class="li-card-skills">Mathematical, comparison, and logical Operators.</li>
                                <li class="li-card-skills">Truthy/Falsy. </li>
                                <li class="li-card-skills">Sequences, Selection, Iterations.</li>
                                <li class="li-card-skills">OOP.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- laravel --}}
                <div class="col-12 col-md-4">
                    <div class="card skill-card h-100">
                        <div class="card-body shadow">
                            <h3 class="card-title card-title-skills bold text-center"> <span class="color-laravel">LARAVEL</span></h3>
                            <div class="skill-progress mb-3">
                                <div class="progress">
                                    <div class="progress-bar bg-laravel  " style="width: 80%">80%</div>
                                </div>
                            </div>
                            <ul class="list-unstyled py-3 align bold">
                                <hr>
                                <li class="li-card-skills">Routing, Views, Controllers, Components for MVC architecture.</li>
                                <li class="li-card-skills">Forms & Mail Handling (validation, submission, processing).</li>
                                <li class="li-card-skills">MySQL Database Management with Migrations, Models, and CRUD operations.</li>
                                <li class="li-card-skills">Advanced File Storage & Validation Rules.</li>
                                <li class="li-card-skills">One-to-Many & Many-to-Many Relationships in relational databases.</li>
                                <li class="li-card-skills">REST API Development and integration.</li>
                                <li class="li-card-skills"></li>
                                <li class="li-card-skills"></li>
                                <li class="li-card-skills"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- gitbash --}}
                <div class="col-12 col-md-4">
                    <div class="card skill-card h-100">
                        <div class="card-body shadow">
                            <h3 class="card-title card-title-skills bold text-center"> <span class="color-gitbash">GITBASH</span></h3>
                            <div class="skill-progress mb-3">
                                <div class="progress">
                                    <div class="progress-bar bg-gitbash " style="width: 97%">97%</div>
                                </div>
                            </div>
                            <ul class="list-unstyled py-3 align bold">
                                <hr>
                                <li class="li-card-skills">File and repository management (file creation, repository initialization).</li>
                                <li class="li-card-skills">Code versioning with commit, add, and push to GitHub.</li>
                                <li class="li-card-skills">Cloning repositories (local/remote).</li>
                                <li class="li-card-skills">Package installation and management via Git Bash.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card skill-card h-100">
                        <div class="card-body shadow">
                            <h3 class="card-title card-title-skills bold text-center"> <span class="color-github">GITHUB</span></h3>
                            <div class="skill-progress mb-3">
                                <div class="progress">
                                    <div class="progress-bar bg-github " style="width: 70%">70%</div>
                                </div>
                            </div>
                            <ul class="list-unstyled py-3 align bold">
                                <hr>
                                <li class="li-card-skills">Repository management (creation, branching, merging, pull requests).</li>
                                <li class="li-card-skills">Collaborative development: working in teams using forks, branches, and pull requests.</li>
                                <li class="li-card-skills">Project documentation using README and Wikis.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    

</x-layout>