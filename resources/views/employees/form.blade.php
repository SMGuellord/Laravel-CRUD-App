<div class="form-group pb-2">
    <label for="firstname">Firstname</label>
    <input type="text" name="firstname" value="{{ old('firstname') ?? $employee->firstname}}" class="form-control">
    <span class="text-danger"> {{$errors->first('firstname')}}</span>
</div>
<div class="form-group pb-2">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') ?? $employee->email}}" class="form-control">
    <span class="text-danger"> {{$errors->first('email')}}</span>
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="compony_id" class="form-control">
        <option value="" disabled>Select a Company</option>
        @foreach($companies as $company)
            <option value="{{$company->id}}"
                {{$company->id == $employee->company_id ? 'selected' : ''}}>
                {{$company->name}}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group pb-2">
    <label for="phone">Phone</label>
    <input type="phone" name="phone" value="{{ old('phone') ?? $employee->phone}}" class="form-control">
    <span class="text-danger"> {{$errors->first('phone')}}</span>
</div>
@csrf