@extends('layouts.app')

@section('content')
    <header id="home" class="hero">
        <div class="hero-content" data-aos="zoom-out">
            <h1>Gregory <span>KANDU</span></h1>
            <p id="typewriter"></p>
            <div class="hero-btns">
                <a href="#projects" class="btn primary">Mes Travaux</a>
                <a href="#contact" class="btn secondary">Me contacter</a>
            </div>
        </div>
    </header>
    <section id="about" class="section">
        <div class="container about-wrapper">
            <div class="about-content">
                <div class="about-left" data-aos="fade-right">
                    <div class="image-container">
                        <img src="{{ asset('images/ma_photo.jpg') }}" alt="Gregory KANDU"
                            style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;">
                    </div>
                </div>
                <div class="about-right" data-aos="fade-left">
                    <h2 class="section-title-left">À propos de moi</h2>
                    <p>
                        Je suis <strong>Gregory KANDU</strong>, étudiant passionné en <strong>Génie Logiciel</strong>
                        à l'<strong>Université Protestante de Lubumbashi (UPL)</strong>.
                        Actuellement en deuxième année (BAC 2), je me spécialise dans la conception et
                        le développement d'applications web et desktop.
                    </p>
                    <p>
                        Mon objectif est de devenir un <strong>Ingénieur Full-Stack</strong> accompli,
                        capable de transformer des idées complexes en solutions numériques fluides et sécurisées.
                        Je m'intéresse également de près à la <strong>Cyber-sécurité</strong> et à l'<strong>Éthique
                            Hacking</strong>.
                    </p>
                    <div class="personal-info">
                        <div class="info-item">
                            <i class="fas fa-university"></i>
                            <span>U.P.L (Lubumbashi, RDC)</span>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-code"></i>
                            <span>Spécialité : Génie Logiciel</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn primary">Me contacter</a>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section">
        <h2 class="section-title" data-aos="fade-up">Projets réalisés </h2>
        <div class="projects-container">
            @foreach ($projects as $project)
                <div class="project-card">
                    @if ($project->image)
                        <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->titre }}"
                            style="width:100%; height:100%; object-fit:cover;">
                    @endif

                    <div class="project-overlay">
                        <div style="text-align: center; padding: 20px;">
                            <h3>{{ $project->titre }}</h3>
                            <p style="font-size: 0.9rem; margin-top: 10px;">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="contact" class="section bg-alt">
        <h2 class="section-title" data-aos="fade-up">Contact</h2>
        <div class="contact-form-container" data-aos="zoom-in">

            {{-- Affichage du message de succès --}}
            @if (session('success'))
                <div style="background: #dcfce7; color: #166534; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Message" rows="5" required></textarea>
                <button type="submit" class="btn primary">Envoyer</button>
            </form>
        </div>
    </section>
@endsection
