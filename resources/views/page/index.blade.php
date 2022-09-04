@extends('layouts.layout')
@section('title', 'Home')
@section('content')

    <div class=" bg-black min-h-screen p-5">
        <div class="container mx-auto p-10 w-">
            <!--Big box-->
            <div class="flex flex-col md:flex-row justify-center items-center border rounded-xl border-pink-600">
                <div class="flex flex-col justify-center items-center md:items-start p-2 ml-48">
                    <h1 class="text-6xl text-cyan-300 font-extrabold">Andrés Vargas</h1>
                    <h2 class="text-2xl text-pink-600 font-bold mt-4"> Software Engienner Student</h2>
                    <p class="text-white text-xl mt-4 ">Hello everyone, I am a software engineering student <br> who has a
                        passion
                        for web development, I would like to <br> specialize in the backend, I am looking for opportunities
                        <br> to
                        grow and get my first job.
                    </p>
                    <div class="flex space-x-4 mt-4">
                        <a href="https://drive.google.com/file/d/1XZs2Q7JBlIOuFWXtfhwGQ0C4KL9AtCpM/view?usp=sharing"
                            class=" mt-4 bg-transparent border-2 border-cyan-500 text-white px-4 py-2 rounded-full text-xl hover:bg-cyan-500 hover:text-black" target="_blank" >My
                            Resume</a>
                    </div>
                    <div class="flex space-x-10 mt-9">
                        <a href="https://www.facebook.com/joseandres.vargasvargas.7/"
                            class="text-white hover:text-pink-600 text-5xl" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/andres_vargas_01/"
                            class="text-white hover:text-pink-600 text-5xl" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/jose-andres-vargas-vargas-72447912b/"
                            class="text-white hover:text-pink-600 text-5xl" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <img class="m-40 rounded-full w-96" src="{{ url('img/andres.jpg') }}" alt="Andrés Vargas">
                </div>
            </div>
            <!-- social medias-->
        </div>

    @endsection
