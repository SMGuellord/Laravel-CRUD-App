<div class="form-group pb-2">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') ?? $company->name}}" class="form-control">
    <span class="text-danger"> {{$errors->first('name')}}</span>
</div>
<div class="form-group pb-2">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') ?? $company->email}}" class="form-control">
    <span class="text-danger"> {{$errors->first('email')}}</span>
</div>

<div class="form-group pb-2">
    <label for="website">Website</label>
    <input type="text" name="website" value="{{ old('website') ?? $company->website}}" class="form-control">
    <span class="text-danger"> {{$errors->first('website')}}</span>
</div>


<div class="form-group d-flex flex-column">
    <label for="logo">Company Logo</label>
    <input type="file" name="logo" class="py-2">
    <span class="text-danger"> {{$errors->first('logo')}}</span>
</div>
@csrf