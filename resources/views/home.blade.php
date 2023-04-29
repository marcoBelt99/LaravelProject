<!-- Pagina resources/views/home.blade.php -->

<!-- Sto andando a derivare rispetto alla pagina: index.blade.php -->
<!-- Attenzione che la view che sto richiamando e' home, nel senso di home.blade.php e non la pagina master index.blade.php -->
@extends('index') 

<!-- Le direttive @\section servono per inserire gli specifici contenuti nelle corrispondenti posizioni indicate dalle direttive @\yield -->
@section('title', 'Portale turnistica online')

@section('content')
<p>Il luogo in cui saranno gestiti i vari turni di lavoro dei dipendenti della ditta Velbel s.r.l.</p>
@endsection