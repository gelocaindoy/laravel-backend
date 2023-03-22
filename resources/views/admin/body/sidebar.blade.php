<div class="deznav">
    <div class="deznav-scroll">





        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>

                </ul>

            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-user"></i>
                    <span class="nav-text">User Profile</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                    <li><a href="{{ route('change.password') }}">Change Password</a></li>

                </ul>

            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-info-circle"></i>
                    <span class="nav-text">Information</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.information') }}">All Information</a></li>
                    <li><a href="{{ route('add.information') }}">Add Information </a></li>

                </ul>

            </li>




            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-003-diamond"></i>
                    <span class="nav-text">Services</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.services') }}">All Services</a></li>
                    <li><a href="{{ route('add.services') }}">Add Services </a></li>

                </ul>

            </li>


            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-list-alt"></i>
                    <span class="nav-text">Our Projects</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.projects') }}">All Projects</a></li>
                    <li><a href="{{ route('add.projects') }}">Add Projects </a></li>

                </ul>

            </li>


            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-clipboard"></i>
                    <span class="nav-text">Our Plans</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.plans') }}">All Plans</a></li>
                    <li><a href="{{ route('add.plans') }}">Add Plans </a></li>

                </ul>

            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-home"></i>
                    <span class="nav-text">Home Content</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.home.content') }}">All Home Content</a></li>
                    <li><a href="{{ route('add.home.content') }}">Add Home Content </a></li>

                </ul>

            </li>


            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">Client Review </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.review') }}">All Review</a></li>
                    <li><a href="{{ route('add.review') }}">Add Review </a></li>

                </ul>

            </li>


            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-copyright"></i>
                    <span class="nav-text">Footer Content </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.footer.content') }}">All Footer Content</a></li>


                </ul>

            </li>



            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-bar-chart"></i>
                    <span class="nav-text">Chart Content </span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.chart.content') }}">All Chart Content</a></li>


                </ul>

            </li>



            <li><a href="{{ route('contact.message') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                    <span class="nav-text">Contact Message</span>
                </a>
            </li>




        </ul>
        </li>
        </ul>
        <div class="copyright">
            <p><strong>React Admin Dashboard</strong> <br>© 2023 All Rights Reserved</p>
            {{-- <p class="fs-12">Developed <span class="heart"></span> by Gelo</p> --}}
        </div>
    </div>
</div>