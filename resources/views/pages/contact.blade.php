<div class="contactgrid">
    <aside>
        <span class="eyebrow">Reach the team</span>
        <h2>Say hello.</h2>
        <p>Contact person: Sumaya</p>
        <a href="mailto:info@bhyoi.org">info@bhyoi.org</a><br>
        <a href="tel:+14013763109">+1(401)376-3109</a>
        <p>2 Hancock Street, Unit 807<br>Quincy, MA 02170</p>
    </aside>

    <form id="message" action="{{ route('inquire') }}" method="post">
        @csrf

        <h2>Send a message</h2>
        <p>All fields are required. Please leave out sensitive personal details.</p>

        @if(session('received'))
            <p role="status" class="notice">Thank you. Beacon Harbor has received your message.</p>
        @endif

        @if($errors->any())
            <div class="notice" role="alert">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <label>Your name
            <input required name="name" autocomplete="name" maxlength="120" value="{{ old('name') }}">
        </label>

        <label>Email address
            <input required type="email" autocomplete="email" maxlength="254" name="email" value="{{ old('email') }}">
        </label>

        <label>What is your message about?
            <select name="subject" required>
                @foreach(['General inquiry', 'Youth programs', 'Partnership', 'Volunteering', 'Giving'] as $subject)
                    <option @selected(old('subject', request('topic')) === $subject)>{{ $subject }}</option>
                @endforeach
            </select>
        </label>

        <label>Message
            <textarea required name="message" rows="5" maxlength="3000">{{ old('message') }}</textarea>
        </label>

        <button class="pill dark">Send message ↗</button>
    </form>
</div>
