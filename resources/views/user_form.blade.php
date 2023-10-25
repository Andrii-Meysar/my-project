<form class="container" action="{{ $actionUrl }}" method="{{ $actionMethod }}">
    @if(!empty($isPut))
    @method('PUT')
    @endif
    @csrf
    <div class="mb-3">
        <label for="name">Name <span class="required">*</span></label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name ?? '' }}" required>
    </div>

    <div class="mb-3">
        <label for="email">Email <span class="required">*</span></label>
        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email ?? '' }}" required>
    </div>

    <div class="mb-3">
        <label for="password">Password <span class="required">*</span></label>
        <input type="password" name="password" id="email" class="form-control" value="{{ $user->password ?? '' }}" required>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            {{ $submitButtonText }}
        </button>
    </div>
<form>
