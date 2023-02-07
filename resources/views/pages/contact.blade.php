<div class="section_inner">
    <div class="cavani_tm_contact">
        <div class="cavani_tm_title">
            <span>Me contacter</span>
        </div>
        <div class="short_info">
            <ul>
                <li>
                    <div class="list_inner">
                        <img class="svg" src="{{asset('img/svg/social/linkedin.svg')}}" alt=""/>
                        <span><a href="https://www.linkedin.com/in/hugo-mayonobe/?originalSubdomain=fr">Hugo Mayonobe</a></span>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <img class="svg" src="{{asset('img/svg/mail.svg') }}" alt="">
                        <span><a href="mailto:hugomayonobe@gmail.com">hugomayonobe@gmail.com</a></span>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <img class="svg" src="{{asset('img/svg/call.svg')}}" alt=""/>
                        <span><a href="tel:0782648734">07 82 64 87 34</a></span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form">
            <div class="contact-form">
                <div class="fields">
                    <form action="/" method="post" class="contact_form" id="contact_form">
                        <div class="first">
                            <ul>
                                <li>
                                    <input wire:model="name" id="name" type="text" placeholder="Nom" autocomplete="off">
                                    @error('name') <span class="error">{{ $message }}</span> @enderror
                                </li>
                                <li>
                                    <input wire:model="mail" id="email" type="text" placeholder="Email" autocomplete="off">
                                    @error('mail') <span class="error">{{ $message }}</span> @enderror
                                </li>
                            </ul>
                        </div>
                        <div class="last" style="margin-bottom: 15px">
                            <textarea style="margin-bottom: 0 !important;" wire:model="message" id="message" placeholder="Message"></textarea>
                            @error('message') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="cavani_tm_button" style="cursor: pointer">
                            <a wire:click.prevent="sendEmail" id="send_message">Envoyer le message</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
