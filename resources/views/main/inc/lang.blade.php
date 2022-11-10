
    <div class="row">
        <div class="col-md-12">
            <select class="form-control changeLang">
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>Russian</option>
            </select>
        </div>
    </div>

