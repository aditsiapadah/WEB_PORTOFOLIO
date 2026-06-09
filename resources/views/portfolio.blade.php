<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - {{ $user->name }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
html{
    scroll-behavior:smooth;
}

body{
    font-family:'Segoe UI',sans-serif;
    background:#f4f7fc;
}

.navbar{
    background:rgba(15,23,42,.95)!important;
    backdrop-filter:blur(10px);
    box-shadow:0 5px 20px rgba(0,0,0,.15);
}

.navbar-brand{
    font-size:1.3rem;
    font-weight:bold;
}

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;

    background:linear-gradient(
        135deg,
        #0f172a,
        #1e293b,
        #2563eb
    );

    color:white;
}

.profile-img{
    width:230px;
    height:230px;
    object-fit:cover;
    border-radius:50%;
    border:6px solid white;

    box-shadow:0 10px 30px rgba(0,0,0,.3);
    transition:.4s;
}

.profile-img:hover{
    transform:scale(1.05);
}

.hero h1{
    font-size:4rem;
    font-weight:800;
}

.hero h3{
    color:#cbd5e1;
}

.section-title{
    text-align:center;
    font-size:2rem;
    font-weight:700;
    margin-bottom:50px;
}

.section-title::after{
    content:'';
    display:block;
    width:80px;
    height:4px;
    background:#2563eb;
    margin:10px auto;
    border-radius:20px;
}

.card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    transition:.4s;
}

.card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.card-img-top{
    object-fit:cover;
}

.btn{
    border-radius:50px;
}

footer{
    background:#0f172a;
    color:white;
    padding:30px;
    text-align:center;
}

.stats{
    margin-top:-50px;
    position:relative;
    z-index:10;
}

.stats .card{
    text-align:center;
    padding:20px;
}

.stats h2{
    font-weight:bold;
    color:#2563eb;
}
</style>
</head>
<body>

<!-- Navbar -->
<style>
/* =======================
   MODERN NAVBAR
======================= */

.navbar-modern{
    background:rgba(2,6,23,.85);
    backdrop-filter:blur(12px);
    box-shadow:0 4px 20px rgba(0,0,0,.15);
    padding:15px 0;
}

.navbar-logo{
    width:42px;
    height:42px;
    border-radius:50%;
    object-fit:cover;
    margin-right:12px;
}

.brand-text{
    color:white;
    font-size:24px;
    font-weight:700;
}

.modern-link{
    color:#cbd5e1 !important;
    font-weight:500;
    margin:0 6px;
    position:relative;
    transition:.3s;
}

.modern-link:hover{
    color:white !important;
}

.modern-link::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-5px;
    width:0;
    height:2px;
    background:#2563eb;
    transition:.3s;
}

.modern-link:hover::after{
    width:100%;
}

.theme-icon{
    font-size:24px;
    cursor:pointer;
    transition:.3s;
}

.theme-icon:hover{
    transform:rotate(20deg) scale(1.15);
}

@media(max-width:991px){

    .navbar-collapse{
        background:#0f172a;
        padding:15px;
        border-radius:15px;
        margin-top:10px;
    }

    .modern-link{
        margin:10px 0;
    }

}
.modern-link i{
    margin-right:6px;
    font-size:15px;
}
/* =======================
   DARK MODE
======================= */

body{
    transition:.3s;
}

.dark-mode{
    background:#0f172a !important;
    color:white;
}

.dark-mode .hero{
    background:#111827 !important;
}

.dark-mode #skills,
.dark-mode .bg-light{
    background:#111827 !important;
}

.dark-mode .about-card,
.dark-mode .info-box,
.dark-mode .project-modern-card,
.dark-mode .contact-card{
    background:#1e293b !important;
    color:white !important;
}

.dark-mode .hero-name,
.dark-mode .skill-title,
.dark-mode .project-content h3{
    color:white !important;
}

.dark-mode p,
.dark-mode .text-muted,
.dark-mode .hero-job,
.dark-mode .hero-desc{
    color:#cbd5e1 !important;
}

.dark-mode footer{
    background:#020617 !important;
}

.dark-mode .tech-badge,
.dark-mode .skill-category{
    background:#334155 !important;
    color:white !important;
}

.dark-mode .project-role{
    border-top:1px solid #334155;
    color:#cbd5e1;
}
</style>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-modern fixed-top">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="#">

            <img src="{{ asset('images/profile1.jpg') }}"
                 alt="Logo"
                 class="navbar-logo">

            <span class="brand-text">
                Portfolio Aditya
            </span>

        </a>

        <button class="navbar-toggler border-0"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <i class="bi bi-list text-white fs-2"></i>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
    <a class="nav-link modern-link" href="#about">
        <i class="bi bi-person"></i> About
    </a>
</li>

<li class="nav-item">
    <a class="nav-link modern-link" href="#skills">
        <i class="bi bi-lightning-charge"></i> Skills
    </a>
</li>

<li class="nav-item">
    <a class="nav-link modern-link" href="#experience">
        <i class="bi bi-briefcase"></i> Experience
    </a>
</li>

<li class="nav-item">
    <a class="nav-link modern-link" href="#projects">
        <i class="bi bi-folder2-open"></i> Projects
    </a>
</li>

<li class="nav-item">
    <a class="nav-link modern-link" href="#contact">
        <i class="bi bi-envelope"></i> Contact
    </a>
</li>

                <li class="nav-item ms-3">
    <span id="themeToggle" class="theme-icon">
        🌙
    </span>
</li>

            </ul>

        </div>

    </div>

</nav>

<!-- HOME -->
<style>
/* =======================
   HERO CENTER
======================= */

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#f8fafc;
    text-align:center;
}

.hero-photo{
    width:220px;
    height:220px;
    object-fit:cover;
    border-radius:50%;
    border:6px solid white;
    box-shadow:0 10px 30px rgba(0,0,0,.1);
    transition:.3s;
}

.hero-photo:hover{
    transform:scale(1.05);
}

.hero-tag{
    color:#2563eb;
    font-weight:600;
    font-size:16px;
}

.hero-name{
    font-size:55px;
    font-weight:800;
    color:#0f172a;
    margin:10px 0;
}

.hero-job{
    color:#64748b;
    margin-bottom:20px;
}

.hero-desc{
    max-width:600px;
    color:#64748b;
    font-size:17px;
}

@media(max-width:768px){

    .hero-name{
        font-size:40px;
    }

    .hero-photo{
        width:180px;
        height:180px;
    }

}
</style>
<!-- HOME -->
<section class="hero">
    <div class="container text-center">

        <img src="{{ Storage::url($user->profile->photo_profile) }}"
             alt="Profile"
             class="hero-photo mb-4">
             <br>
        <span class="hero-tag">
            👋 Hello, I'm
        </span>

        <h1 class="hero-name">
            {{ $user->name }}
        </h1>

        <h4 class="hero-job">
            Web Developer
        </h4>

        <div class="mt-4">
            <a href="#projects" class="btn btn-primary me-2">
                My Projects
            </a>

            <a href="#contact" class="btn btn-outline-primary">
                Contact Me
            </a>
        </div>

    </div>
</section>

<!-- ABOUT -->
<style>
/* =======================
   ABOUT ME
======================= */

.about-card{
    background:#fff;
    padding:30px;
    border-radius:25px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.4s;
}

.about-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.about-icon{
    font-size:50px;
    color:#2563eb;
    margin-bottom:20px;
}

.about-card h4{
    font-weight:700;
    margin-bottom:15px;
}

.about-card p{
    color:#64748b;
}

.info-box{
    background:white;
    padding:20px;
    border-radius:20px;
    display:flex;
    align-items:center;
    gap:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.info-box i{
    font-size:35px;
    color:#2563eb;
}
</style>
<!-- ABOUT -->
<section id="about" class="py-5">
    <div class="container">

        <h2 class="section-title">
            About Me
        </h2>

        <div class="row">

            <!-- Tentang Saya -->
            <div class="col-lg-4 mb-4">
                <div class="about-card h-100">

                    <div class="about-icon">
                        <i class="bi bi-person-circle"></i>
                    </div>

                    <h4>Tentang Saya</h4>

                    <p>
                        {{ $user->profile->short_bio }}
                    </p>

                    <p>
                        Saya adalah seorang pengembang web yang memiliki minat
                        dalam membangun aplikasi modern menggunakan Laravel,
                        Bootstrap, dan MySQL. Saya senang mempelajari teknologi
                        baru serta menciptakan solusi digital yang bermanfaat.
                    </p>

                </div>
            </div>

            <!-- Visi -->
            <div class="col-lg-4 mb-4">
                <div class="about-card h-100">

                    <div class="about-icon">
                        <i class="bi bi-bullseye"></i>
                    </div>

                    <h4>Visi</h4>

                    <p>
                        {{ $user->profile->professional_vision }}
                    </p>

                </div>
            </div>

            <!-- Misi -->
            <div class="col-lg-4 mb-4">
                <div class="about-card h-100">

                    <div class="about-icon">
                        <i class="bi bi-rocket-takeoff-fill"></i>
                    </div>

                    <h4>Misi</h4>

                    <p>
                        {{ $user->profile->mission }}
                    </p>

                </div>
            </div>

        </div>

        <!-- Informasi Tambahan -->
        <div class="row mt-4">

            <div class="col-md-6 mb-3">
                <div class="info-box">

                    <i class="bi bi-geo-alt-fill"></i>

                    <div>
                        <strong>Location</strong><br>
                        {{ $user->profile->location }}
                    </div>

                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="info-box">

                    <i class="bi bi-calendar-event-fill"></i>

                    <div>
                        <strong>Date of Birth</strong><br>
                        {{ $user->profile->date_of_birth?->format('d/m/Y') }}
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- SKILLS -->
<style>
/* =======================
   SKILLS MODERN
======================= */

#skills{
    background:#f8fafc;
}

.skill-card{
    background:white;
    border-radius:25px;
    padding:40px 25px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.3s;
    height:100%;
}

.skill-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.skill-icon{
    font-size:50px;
    color:#2563eb;
    margin-bottom:20px;
}

.skill-title{
    font-weight:700;
    color:#0f172a;
    margin-bottom:10px;
}

.skill-level{
    color:#2563eb;
    font-weight:600;
    margin-bottom:15px;
}

.skill-category{
    display:inline-block;
    background:#eff6ff;
    color:#2563eb;
    padding:8px 16px;
    border-radius:30px;
    font-size:13px;
    font-weight:600;
}

/* Dark Mode */

.dark-mode .skill-card{
    background:#1e293b !important;
}

.dark-mode .skill-title{
    color:white !important;
}

.dark-mode .skill-level{
    color:#60a5fa !important;
}

.dark-mode .skill-category{
    background:#334155;
    color:white;
}
</style>
<!-- SKILLS -->
<section id="skills" class="py-5 bg-light">

    <div class="container">

        <h2 class="section-title">
            Skills
        </h2>

        <div class="row justify-content-center">

            @foreach($user->skills as $skill)

            <div class="col-lg-4 col-md-6 mb-4 d-flex">

                <div class="skill-card w-100">

                    @if(strtolower($skill->category) == 'frontend')
                        <i class="bi bi-code-slash skill-icon"></i>

                    @elseif(strtolower($skill->category) == 'backend')
                        <i class="bi bi-server skill-icon"></i>

                    @elseif(strtolower($skill->category) == 'database')
                        <i class="bi bi-database skill-icon"></i>

                    @elseif(strtolower($skill->category) == 'tools')
                        <i class="bi bi-tools skill-icon"></i>

                    @else
                        <i class="bi bi-lightning-charge skill-icon"></i>
                    @endif

                    <h4 class="skill-title">
                        {{ $skill->skill_name }}
                    </h4>

                    <p class="skill-level">
                        {{ $skill->proficiency_level }}
                    </p>

                    <span class="skill-category">
                        {{ $skill->category }}
                    </span>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- EXPERIENCE -->
<style>
/* =======================
   EXPERIENCE TIMELINE
======================= */

.timeline{
    position:relative;
    max-width:900px;
    margin:auto;
}

.timeline::before{
    content:'';
    position:absolute;
    left:20px;
    top:0;
    width:4px;
    height:100%;
    background:#2563eb;
    border-radius:10px;
}

.timeline-item{
    position:relative;
    padding-left:70px;
    margin-bottom:40px;
}

.timeline-dot{
    position:absolute;
    left:10px;
    top:20px;
    width:24px;
    height:24px;
    background:#2563eb;
    border:4px solid white;
    border-radius:50%;
    box-shadow:0 0 15px rgba(37,99,235,.5);
}

.timeline-content{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    transition:.3s;
}

.timeline-content:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.timeline-content h4{
    color:#0f172a;
}

.timeline-content p{
    color:#64748b;
    margin-bottom:0;
}
/* EXPERIENCE DARK MODE */

.dark-mode .timeline-content{
    background:#1e293b !important;
    color:#fff !important;
    border:1px solid #334155;
}

.dark-mode .timeline-content h4{
    color:#ffffff !important;
}

.dark-mode .timeline-content h6{
    color:#cbd5e1 !important;
}

.dark-mode .timeline-content p{
    color:#cbd5e1 !important;
}

.dark-mode .timeline::before{
    background:#3b82f6;
}

.dark-mode .timeline-dot{
    background:#3b82f6;
    border:4px solid #0f172a;
}
</style>
<!-- EXPERIENCE -->
<section id="experience" class="py-5">
    <div class="container">

        <h2 class="section-title">
            Experience
        </h2>

        <div class="timeline">

            @foreach($user->experiences as $experience)

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <div class="d-flex justify-content-between flex-wrap">

                        <h4 class="fw-bold">
                            {{ $experience->position_title }}
                        </h4>

                        <span class="experience-date">
                            {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }}
                        -
                            {{ $experience->is_current 
                            ? 'Present' 
                            : \Carbon\Carbon::parse($experience->end_date)->format('M Y') }}
                    </span>

                    </div>

                    <h6 class="text-muted mb-3">
                        {{ $experience->organization_name }}
                    </h6>

                    <p>
                        {{ $experience->description }}
                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

<!-- PROJECTS -->
<style>
/* =======================
   PROJECTS MODERN
======================= */

.project-modern-card{
    background:#fff;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
    height:100%;
}

.project-modern-card:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.project-image{
    position:relative;
    height:180px;
    overflow:hidden;
}

.project-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:.5s;
}

.project-modern-card:hover img{
    transform:scale(1.08);
}

.project-overlay{
    position:absolute;
    inset:0;
    background:rgba(15,23,42,.75);

    display:flex;
    justify-content:center;
    align-items:center;
    gap:10px;

    opacity:0;
    transition:.3s;
}

.project-modern-card:hover .project-overlay{
    opacity:1;
}

.project-content{
    padding:20px;
}

.project-badge{
    display:inline-block;
    background:#2563eb;
    color:white;
    padding:5px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

.project-content h3{
    margin-top:15px;
    font-size:24px;
    font-weight:700;
    color:#0f172a;
}

.project-content p{
    color:#64748b;
    margin-top:10px;
    min-height:50px;
}

.project-tech{
    margin-top:15px;
    display:flex;
    flex-wrap:wrap;
    gap:8px;
}

.tech-badge{
    background:#eff6ff;
    color:#2563eb;
    padding:5px 10px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

.project-role{
    margin-top:15px;
    padding-top:15px;
    border-top:1px solid #e2e8f0;
    color:#475569;
}

.section-title{
    text-align:center;
    font-weight:700;
    margin-bottom:50px;
}

.section-title::after{
    content:'';
    display:block;
    width:60px;
    height:3px;
    background:#2563eb;
    margin:10px auto;
    border-radius:10px;
}
</style>

<section id="projects" class="py-5 bg-light">

    <div class="container">

        <h2 class="section-title">
            Featured Projects
        </h2>

        <div class="row">

            @foreach($user->projects as $project)

            <div class="col-xl-4 col-lg-4 col-md-6 mb-4">

                <div class="project-modern-card h-100">

                    <div class="project-image">

                        <img src="{{ \Storage::url($project->thumbnail) }}"
                                alt="{{ $project->project_title }}">

                        <div class="project-overlay">

                            @if($project->github_url)

                            <a href="{{ $project->github_url }}"
                               target="_blank"
                               class="btn btn-dark btn-sm">

                                <i class="bi bi-github"></i>
                                GitHub

                            </a>

                            @endif

                            @if(!empty($project->project_url))

                            <a href="{{ $project->project_url }}"
                               target="_blank"
                               class="btn btn-primary btn-sm">

                                <i class="bi bi-box-arrow-up-right"></i>
                                Demo

                            </a>

                            @endif

                        </div>

                    </div>

                    <div class="project-content">

                        <span class="project-badge">
                            {{ $project->project_type }}
                        </span>

                        <h3>
                            {{ $project->project_title }}
                        </h3>

                        <p>
                            {{ Str::limit($project->description, 80) }}
                        </p>

                        <div class="project-tech">

                            @foreach(explode(',', $project->technologies) as $tech)

                            <span class="tech-badge">
                                {{ trim($tech) }}
                            </span>

                            @endforeach

                        </div>

                        <div class="project-role">

                            <strong>Role:</strong>
                            {{ $project->role }}

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<!-- CONTACT -->
<style>
    /* =======================
   CONTACT
======================= */

.contact-card{
    background:white;
    padding:30px 20px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:.4s;
    height:100%;
}

.contact-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.contact-icon{
    font-size:50px;
    color:#2563eb;
}

.contact-card h5{
    font-weight:700;
}

.contact-card .btn{
    border-radius:30px;
    padding:10px 20px;
}
</style>
<!-- CONTACT -->
<section id="contact" class="py-5">
    <div class="container">

        <h2 class="section-title">
            Contact Me
        </h2>

        <div class="row justify-content-center">

            @foreach($user->contacts->where('is_public', true) as $contact)

                <div class="col-lg-3 col-md-6 mb-4">

                    <div class="contact-card text-center">

                        {{-- ICON --}}
                        @if(strtolower($contact->contact_type) == 'email')

                            <i class="bi bi-envelope-fill contact-icon"></i>

                        @elseif(strtolower($contact->contact_type) == 'whatsapp')

                            <i class="bi bi-whatsapp contact-icon"></i>

                        @elseif(strtolower($contact->contact_type) == 'github')

                            <i class="bi bi-github contact-icon"></i>

                        @elseif(strtolower($contact->contact_type) == 'linkedin')

                            <i class="bi bi-linkedin contact-icon"></i>

                        @elseif(strtolower($contact->contact_type) == 'instagram')

                            <i class="bi bi-instagram contact-icon"></i>

                        @else

                            <i class="bi bi-person-lines-fill contact-icon"></i>

                        @endif

                        {{-- TITLE --}}
                        <h5 class="mt-3 fw-bold">
                            {{ $contact->contact_type }}
                        </h5>

                        {{-- VALUE --}}
                        <p class="text-muted">
                            {{ $contact->contact_value }}
                        </p>

                        {{-- BUTTON --}}
                        @if(strtolower($contact->contact_type) == 'email')

                            <a href="mailto:{{ $contact->contact_value }}"
                               class="btn btn-primary">
                                Send Email
                            </a>

                        @elseif(strtolower($contact->contact_type) == 'whatsapp')

                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->contact_value) }}"
                               target="_blank"
                               class="btn btn-success">
                                Chat WhatsApp
                            </a>

                        @elseif(strtolower($contact->contact_type) == 'github')

                            <a href="{{ $contact->contact_value }}"
                               target="_blank"
                               class="btn btn-dark">
                                Visit GitHub
                            </a>

                        @elseif(strtolower($contact->contact_type) == 'linkedin')

                            <a href="{{ $contact->contact_value }}"
                               target="_blank"
                               class="btn btn-info text-white">
                                View LinkedIn
                            </a>

                        @elseif(strtolower($contact->contact_type) == 'instagram')

                            <a href="https://instagram.com/{{ str_replace('@', '', $contact->contact_value) }}"
                               target="_blank"
                               class="btn btn-danger">
                                View Instagram
                            </a>

                        @endif

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

<footer>
    <p>
        © {{ date('Y') }} {{ $user?->name ?? 'Tidak ada user' }}
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const themeToggle = document.getElementById('themeToggle');

    themeToggle.addEventListener('click', function () {

        document.body.classList.toggle('dark-mode');

        if(document.body.classList.contains('dark-mode')){
            themeToggle.innerHTML = '☀️';
        }else{
            themeToggle.innerHTML = '🌙';
        }

    });

});
</script>

</body>
</html>