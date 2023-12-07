<link href="GSB/resources/css/app.css">
<
    <form action="/connexion" method="post" class="section">
        <input type="hidden" name ="_token" value="{{ csrf_token() }}">

        <div class="field">
            <label class="label">Login</label>
            <div class="control">
                <input class="input" name="login" value="{{ old('login') }}">
            </div>
            
               
            
        </div>
		
		
        <div class="field">
            <label class="label">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit" >Se connecter</button>
            </div>
        </div>
    </form>
