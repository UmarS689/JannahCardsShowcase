<!-- GUEST LIST TAB -->
@push('styles')
    @vite([
        'resources/css/tabs/guestList.css'
    ])
@endpush

@push('scripts')
    @vite('resources/js/tabs/guestList.js')
@endpush
<div id="guestList">

    <h3>Guest Names</h3>

    <div class="guest-input">
        <div class="input-group">
            <label class="guestNameLabel" for="guestNameInput">Guest Name</label>
            <input type="text" id="guestNameInput" placeholder="e.g. Sarah Khan">
        </div>
        <br>
        <div class="input-group small">
            <label class="guestNameNumber" for="guestNoInput">People</label>
            <input type="number" id="guestNoInput" value="1" min="1">
        </div>
        <br>
        <button id="addGuestBtn">Add</button>
    </div>


    <ul id="guestListItems"></ul>


    <button id="guestListClose" class="close-btn">Close Panel</button>
</div>

