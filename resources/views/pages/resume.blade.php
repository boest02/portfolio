@extends('layouts.main')

@section('title', 'Resume')

@section('content')
    @php
        // // Read the JSON file
        // $json = file_get_contents('my_resume.json');

        // Decode the JSON file
        $json_data = json_decode(file_get_contents('my_resume.json'), true);
        
    @endphp

    <x-resume.summary summary="{{ $json_data['SUMMARY'] }}" />
    <x-resume.experience :data="$json_data['EXPERIENCE']" />
    <x-resume.education :data="$json_data['EDUCATION']" />
    <x-resume.aside>
        <x-resume.skills :data="$json_data['TECHNICAL']" />
        <x-resume.strengths :data="$json_data['STRENGTHS']" />        
    </x-resume.aside>
@endsection
