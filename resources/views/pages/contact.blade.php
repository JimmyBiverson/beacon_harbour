<section class="contact-details">
    <article class="contact-detail reveal">
        <span class="detail-icon" aria-hidden="true">01</span>
        <h3>Email</h3>
        <a href="mailto:{{ config('outreach.contact.email') }}">{{ config('outreach.contact.email') }}</a>
        <p>For program questions, partnerships and general inquiries.</p>
    </article>
    <article class="contact-detail reveal">
        <span class="detail-icon" aria-hidden="true">02</span>
        <h3>Call</h3>
        <a href="tel:{{ config('outreach.contact.phone_uri') }}">{{ config('outreach.contact.phone') }}</a>
        <p>Leave a message if the team is not available when you call.</p>
    </article>
    <article class="contact-detail reveal">
        <span class="detail-icon" aria-hidden="true">03</span>
        <h3>Visit</h3>
        <address>{{ config('outreach.contact.address.0') }}<br>{{ config('outreach.contact.address.1') }}</address>
        <p>Please contact us before visiting so we can coordinate a time.</p>
    </article>
</section>

<section class="contact-layout section-tint">
    <div class="wrap contactgrid">
        <aside class="contact-aside">
            <span class="eyebrow">Reach the team</span>
            <h2>We are here to <em>listen.</em></h2>
            <p>Contact person: {{ config('outreach.contact.person') }}</p>
            <p>{{ config('outreach.contact.reply_time') }}</p>
            <p>Share what you are looking for and the best way to reach you. Please leave out medical records and other sensitive personal details.</p>
            <div class="contact-promise">
                <span class="dot"></span>
                <p>We will use the details you provide to review your inquiry and respond.</p>
            </div>
        </aside>

        <form id="message" action="{{ route('inquire') }}" method="post" class="contact-form">
            @csrf
            <h2>Send us a message</h2>
            <p>Fields marked below are required.</p>

            @if(session('received'))
                <p role="status" class="notice">Thanks for reaching out — we've received your message and will be in touch soon.</p>
            @endif

            @if($errors->any())
                <div class="notice" role="alert">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <label>Name *
                <input required name="name" autocomplete="name" maxlength="120" value="{{ old('name') }}">
            </label>

            <label>Email *
                <input required type="email" autocomplete="email" maxlength="254" name="email" value="{{ old('email') }}">
            </label>

            <label>Subject
                <select name="subject" required>
                    @foreach(['General inquiry', 'Youth programs', 'Partnership', 'Volunteering', 'Giving'] as $subject)
                        <option @selected(old('subject', request('topic')) === $subject)>{{ $subject }}</option>
                    @endforeach
                </select>
            </label>

            <label>Message *
                <textarea required name="message" rows="5" maxlength="3000">{{ old('message') }}</textarea>
            </label>

            <button class="pill donate-cta" type="submit">Send Message <b>↗</b></button>
        </form>
    </div>
</section>
