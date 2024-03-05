<x-main>
    <form action="/register" method="POST">
        @csrf
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input" type="text" class="form-control" name="name" value={{old('name')}}>
          @error('name')
          <span> {{$messsage}}</span>
          @enderror
        </div>
      </div>

      <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" class="form-control" name="email" value={{old('name')}}>
          @error('email')
          <span> {{$messsage}}</span>
          @enderror
        </div>
      </div>


      <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input class="input" type="password" class="form-control" name="password">
          @error('password')
          <span> {{$messsage}}</span>
          @enderror
        </div>
      </div>

      <div class="field">
        <label class="label">Conferma Password</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input" type="password" class="form-control" name="password_confirmation">
        </div>
      </div>

      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link" type="submit">Submit</button>
        </div>
      </div>
    </form>

</x-main>
