<x-layout>

    <div>
    <x-navbar></x-navbar>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4 p-md-5">

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>                             
                        @endif
                        <form id="contactForm" class="needs-validation" action="{{route ('sendemail')}}" method="POST">
                            @csrf
                            <h2 class="text-center mb-4 display-5 bold"><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                              </svg> Contattami <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                              </svg></h2>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="emailInput" placeholder="esempio@dominio.com" required name="email" value="{{ old('email') }}">
                                <label for="emailInput"><i class="bi bi-envelope me-2"></i>Indirizzo Email</label>
                                <div class="invalid-feedback">Inserisci un indirizzo email valido</div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="tel" class="form-control" id="phoneInput" name="phone" value="{{ old('phone') }}">
                                <label for="phoneInput"><i class="bi bi-telephone me-2"></i>Numero di Telefono</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="url" class="form-control" id="websiteInput" placeholder="https://www.tuosito.com" name="website" value="{{ old('website') }}">
                                <label for="websiteInput"><i class="bi bi-globe me-2"></i>Sito Web (Opzionale)</label>
                                <div class="invalid-feedback">Inserisci un URL valido</div>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="message" name="message" placeholder="Scrivi qui il tuo messaggio..." style="height: 150px" maxlength="500">{{ old('message') }}</textarea>
                                <label for="message"><i class="bi bi-chat-dots me-2"></i>Messaggio Finale</label>
                                <div class="form-text text-end"><span id="charCount">0</span>/500</div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                                <button type="reset" class="btn btn-contact me-md-2">Cancella</button>
                                <button type="submit" class="btn btn-cv" id="submitBtn">
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    <span class="btn-text bold">Invia Messaggio</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>