@extends('layouts.master')

@section('content')

    <h2>Redaguoti aukcioną</h2>

    <form action="/update/{{ $game->id }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="auctionbrandid" class="col-sm-3 col-form-label">Transporto priemonės markė</label>
            <div class="col-sm-9">
                <input name="brand" type="text" class="form-control" id="auctionbrandid" placeholder="Mercedes-Benz" required
                       value="{{ isset($game) ? $game->brand : old('brand') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="auctionmodelid" class="col-sm-3 col-form-label">Transporto priemonės modelis</label>
            <div class="col-sm-9">
                <input name="model" type="text" class="form-control" id="auctionmodelid" placeholder="E320" required
                       value="{{ $game->model }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="carpowerid" class="col-sm-3 col-form-label">Variklio galia (kw)</label>
            <div class="col-sm-9">
                <input name="power" type="text" class="form-control" id="carpowerid" placeholder="150" required
                       value="{{ $game->power }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="enginecapacityid" class="col-sm-3 col-form-label">Darbinis tūris (litrai)</label>
            <div class="col-sm-9">
                <input name="capacity" type="text" class="form-control" id="enginecapacityid" placeholder="Pvz.: 1.9" required
                       value="{{ $game->capacity }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="fuel_id" class="col-sm-3 col-form-label">Kuro tipas</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="fuel_id" name="fuel" required >
                    <option value="{{ $game->fuel }}" @if(old('fuel', $game->fuel) === $game->fuel)  'selected' > @endif {{ $game->fuel }}</option>
                    <option value="Benzinas">Benzinas</option>
                    <option value="Dyzelis">Dyzelis</option>
                    <option value="Elektra">Elektra</option>
                    <option value="Benzinas/elektra">Benzinas/elektra</option>
                    <option value="Dyzelis/elektra">Dyzelis/elektra</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="gasid" class="col-sm-3 col-form-label">Dujų įranga</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="gasid" name="gas" required>
                    <option value="{{ $game->gas }}" @if(old('gas', $game->gas) === $game->gas)  'selected'> @endif {{ $game->gas }}</option>
                    <option value="Nėra">Nėra</option>
                    <option value="Yra">Yra</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="gearboxid" class="col-sm-3 col-form-label">Pavarų dėžė</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="gearboxid" name="gearbox" required>
                    <option value="{{ $game->gearbox }}" @if(old('gearbox', $game->gearbox) === $game->gearbox)  'selected' > @endif {{ $game->gearbox }}</option>
                    <option value="Mechaninė">Mechaninė</option>
                    <option value="Automatinė">Automatinė</option>
                    <option value="Pusiau automatinė">Pusiau automatinė</option>
                    <option value="Robotas">Robotas</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="wheelsid" class="col-sm-3 col-form-label">Varomieji ratai</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="wheelsid" name="wheels" required>
                    <option value="{{ $game->wheels }}" @if(old('wheels', $game->wheels) === $game->wheels)  'selected'> @endif {{ $game->wheels }}</option>
                    <option value="Priekiniai">Priekiniai</option>
                    <option value="Galiniai">Galiniai</option>
                    <option value="Visi">Visi</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="bodyid" class="col-sm-3 col-form-label">Kėbulo tipas</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="bodyid" name="body" required>
                    <option value="{{ $game->body }}" @if(old('body', $game->body) === $game->body)  'selected'> @endif {{ $game->body }}</option>
                    <option value="Sedanas">Sedanas</option>
                    <option value="Universalas">Universalas</option>
                    <option value="Hečbekas">Hečbekas</option>
                    <option value="Coupe">Coupe</option>
                    <option value="Visureigis">Visureigis</option>
                    <option value="Kabrioletas">Kabrioletas</option>
                    <option value="Vienatūris">Vienatūris</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="yearid" class="col-sm-3 col-form-label">Pagaminimo metai</label>
            <div class="col-sm-9">
                <input type="number" min="1900" max="2099" step="1" name="year" class="form-control"
                       id="yearid" required  value="{{ $game->year }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="monthid" class="col-sm-3 col-form-label">Pagaminimo mėnuo</label>
            <div class="col-sm-9">
                <input type="number" min="1" max="12" step="1" name="month" class="form-control"
                       id="monthid" required value="{{ $game->month }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="kmrunid" class="col-sm-3 col-form-label">Automobilio rida (km)</label>
            <div class="col-sm-9">
                <input name="runkm" type="text" class="form-control" id="kmrunid" placeholder="50000" required
                       value="{{ $game->runkm }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="countryid" class="col-sm-3 col-form-label">Automobilio kilmės šalis</label>
            <div class="col-sm-9">
                <input name="country" type="text" class="form-control" id="countryid" placeholder="Vokietija" required
                       value="{{ $game->country }}">
            </div>
        </div>


        <div class="form-group row">
            <label for="vinid" class="col-sm-3 col-form-label">Automobilio VIN kodas</label>
            <div class="col-sm-9">
                <input name="vin" type="text" class="form-control" id="vinid" placeholder="WBE46A699E8G96D6621" required
                       value="{{ $game->vin }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="inspectionid" class="col-sm-3 col-form-label">Tech apžiūra</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="inspectionid" name="inspection" required>
                    <option value="{{ $game->inspection }}" @if(old('inspection', $game->inspection) === $game->inspection)  'selected' > @endif {{ $game->inspection }}</option>
                    <option value="Yra">Yra</option>
                    <option value="Nėra">Nėra</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="colorid" class="col-sm-3 col-form-label">Spalva</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="colorid" name="color" required>
                    <option value="{{ $game->color }}" @if(old('color', $game->color) === $game->color)  'selected' > @endif {{ $game->color }}</option>
                    <option value="Juoda">Juoda</option>
                    <option value="Sidabrinė">Sidabrinė</option>
                    <option value="Pilka">Pilka</option>
                    <option value="Mėlyna">Mėlyna</option>
                    <option value="Balta">Balta</option>
                    <option value="Raudona">Raudona</option>
                    <option value="Žalia">Žalia</option>
                    <option value="Smėlio">Smėlio</option>
                    <option value="Ruda">Ruda</option>
                    <option value="Auksinė">Auksinė</option>
                    <option value="Geltona">Geltona</option>
                    <option value="Violetinė">Violetinė</option>
                    <option value="Oranžinė">Oranžinė</option>
                    <option value="Marga">Marga</option>
                    <option value="Kita">Kita</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="cityid" class="col-sm-3 col-form-label">Transporto priemonės miestas</label>
            <div class="col-sm-9">
                <input name="city" type="text" class="form-control" id="cityid" placeholder="" required
                       value="{{ $game->city }}">
            </div>
        </div>
<!--
        <div class="form-group row">
            <label for="carimageid" class="col-sm-3 col-form-label">Pagrindinė nuotrauka</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="carimageid"
                       src="{{ $game->image }}">
                <span style="margin-left: 15px; width: 480px;"></span>
            </div>
        </div>
-->
        <div class="form-group row">
            <label for="descriptionid" class="col-sm-3 col-form-label">Transporto priemonės aprašymas</label>
            <div class="col-sm-9">
                <textarea name="description" class="form-control" id="descriptionid" placeholder="" required>{{ $game->description }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="timeid" class="col-sm-3 col-form-label">Pasirinkite auciono trukmę dienomis</label>
            <div class="col-sm-9">
                <input type="number" min="1" max="31" step="1" name="time" class="form-control" id="timeid" placeholder="" required
                       value="{{ $game->time }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="priceid" class="col-sm-3 col-form-label">Pradinė aukciono kaina</label>
            <div class="col-sm-9">
                <input type="text" name="price" class="form-control" id="priceid" placeholder="" required
                       value="{{ $game->price }}">
            </div>
        </div>


        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Paskelbti aukcioną</button>
            </div>
        </div>
        @include('partials.formerrors')
    </form>

@endsection








