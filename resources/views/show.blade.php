@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <div class="game-details border-b border-gray-800 pb-12 flex">
            <div class="flex-none">
                <img src="/ff7.jpg" alt="cover">
            </div>
            <div class="ml-12 mr-64">
                <h2 class="font-semibold text-4xl">Final Fantasy VII Remake</h2>
                <div class="text-gray-400">
                    <span>Adventure, RPG</span>
                    &middot;
                    <span>Square Enix</span>
                    &middot;
                    <span>Playstation 4</span>
                </div>

                <div class="flex flex-wrap items-center mt-8">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">90%</div>
                        </div>
                        <div class="ml-4 text-xs">Member <br> Score</div>
                    </div>
                    <div class="flex items-center ml-12">
                        <div class="w-16 h-16 bg-gray-800 rounded-full">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">92%</div>
                        </div>
                        <div class="ml-4 text-xs">Critics <br> Score</div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">a</a>
                        </div>

                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">a</a>
                        </div>

                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">a</a>
                        </div>

                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 16 17" fill="none"><path d="M8 .266C3.582.266 0 3.952 0 8.5s3.582 8.234 8 8.234 8-3.686 8-8.234S12.418.266 8 .266zm2.655 11.873l-.365.375a.8.8 0 00-.2.355c-.048.188-.087.378-.153.56l-.561 1.556c-.444.1-.903.156-1.376.156v-.91c.055-.418-.246-1.203-.73-1.701-.194-.2-.302-.47-.302-.752v-1.062c0-.387-.203-.742-.531-.93a52.733 52.733 0 00-1.575-.866 4.648 4.648 0 01-1.02-.722l-.027-.024a3.781 3.781 0 01-.582-.689c-.303-.457-.796-1.209-1.116-1.698a6.581 6.581 0 013.33-3.383l.774.399c.343.177.747-.08.747-.475v-.375c.257-.043.52-.07.787-.08l.912.939a.542.542 0 010 .751l-.15.156-.334.343c-.101.104-.101.272 0 .376l.15.155c.102.104.102.272 0 .376l-.257.265a.255.255 0 01-.183.078h-.29a.254.254 0 00-.18.076l-.32.32a.269.269 0 00-.05.31l.502 1.035c.086.176-.039.384-.23.384h-.182a.253.253 0 01-.17-.065l-.299-.268a.51.51 0 00-.501-.102l-1.006.345a.386.386 0 00-.19.144.405.405 0 00.14.587l.357.184c.304.156.639.238.978.238.34 0 .729.906 1.032 1.062h2.153c.274 0 .537.112.73.311l.442.455c.184.19.288.447.288.716a1.584 1.584 0 01-.442 1.095zm2.797-3.033a.775.775 0 01-.457-.331l-.58-.896a.812.812 0 010-.883l.632-.976a.78.78 0 01.298-.27l.419-.216c.436.894.688 1.9.688 2.966 0 .288-.024.57-.06.848l-.94-.242z" /></svg>
                            </a>
                        </div>

                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="" class="hover:text-gray-400">a
                            </a>
                        </div>
                    </div>

                </div>
                <p class="mt-12">looooooong text</p>

                <div class="mt-12">
                    <button class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-200">Play Trailer</button>
                </div>
            </div>
        </div>
        <div class="image-container border-b border-gray-800 pb-12 mt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
            <div class="grid grid-cols-3 gap-12 mt-8">
                <div>
                    <a href="#">
                        <img src="/screenshot.jpg" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-200">
                    </a>
                </div>
            </div>
        </div>
        <div class="similar-games-containermt-8">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
            <div
                class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 grid-cols-6 gap-12">
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Name of the game
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Name of the game
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>

                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        Name of the game
                    </a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover"
                                 class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                             style="right:-20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>

                        </div>
                    </div>
        </div>

    </div>
@endsection
