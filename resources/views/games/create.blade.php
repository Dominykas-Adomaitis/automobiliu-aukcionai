@extends('layouts.master')

@section('content')

    <h2>Sukurti aukcioną</h2>

    <form method="post" action="/games" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="auctionbrandid" class="col-sm-3 col-form-label">Transporto priemonės markė</label>
            <div class="col-sm-9">
                <input name="brand" type="text" class="form-control" id="auctionbrandid" placeholder="Mercedes-Benz" required
                       value="{{ old('brand') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="auctionmodelid" class="col-sm-3 col-form-label">Transporto priemonės modelis</label>
            <div class="col-sm-9">
                <input name="model" type="text" class="form-control" id="auctionmodelid" placeholder="E320" required
                       value="{{ old('model') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="carpowerid" class="col-sm-3 col-form-label">Variklio galia (kw)</label>
            <div class="col-sm-9">
                <input name="power" type="text" class="form-control" id="carpowerid" placeholder="150" required
                       value="{{ old('power') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="enginecapacityid" class="col-sm-3 col-form-label">Darbinis tūris (litrai)</label>
            <div class="col-sm-9">
                <input name="capacity" type="text" class="form-control" id="enginecapacityid" placeholder="Pvz.: 1.9" required
                       value="{{ old('capacity') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="fuel_id" class="col-sm-3 col-form-label">Kuro tipas</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="fuel_id" name="fuel" required
                        value="{{ old('fuel') }}">
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
                <select class="col-sm-9 form-control" id="gasid" name="gas" required
                        value="{{ old('gas') }}">
                    <option value="Nėra">Nėra</option>
                    <option value="Yra">Yra</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="gearboxid" class="col-sm-3 col-form-label">Pavarų dėžė</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="gearboxid" name="gearbox" required
                        value="{{ old('gearbox') }}">
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
                <select class="col-sm-9 form-control" id="wheelsid" name="wheels" required
                        value="{{ old('wheels') }}">
                    <option value="Priekiniai">Priekiniai</option>
                    <option value="Galiniai">Galiniai</option>
                    <option value="Galiniai">Visi</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="bodyid" class="col-sm-3 col-form-label">Kėbulo tipas</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="bodyid" name="body" required
                        value="{{ old('body') }}">
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
                <input type="number" min="1900" max="2099" step="1" value="2022" name="year" class="form-control"
                       id="yearid" required value="{{ old('year') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="monthid" class="col-sm-3 col-form-label">Pagaminimo mėnuo</label>
            <div class="col-sm-9">
                <input type="number" min="1" max="12" step="1" value="1" name="month" class="form-control"
                       id="monthid" required value="{{ old('month') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="kmrunid" class="col-sm-3 col-form-label">Automobilio rida (km)</label>
            <div class="col-sm-9">
                <input name="runkm" type="text" class="form-control" id="kmrunid" placeholder="50000" required
                       value="{{ old('runkm') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="countryid" class="col-sm-3 col-form-label">Automobilio kilmės šalis</label>
            <div class="col-sm-9">
                <input name="country" type="text" class="form-control" id="countryid" placeholder="Vokietija" required
                       value="{{ old('country') }}">
            </div>
        </div>


        <div class="form-group row">
            <label for="vinid" class="col-sm-3 col-form-label">Automobilio VIN kodas</label>
            <div class="col-sm-9">
                <input name="vin" type="text" class="form-control" id="vinid" placeholder="WBE46A699E8G96D6621" required
                       value="{{ old('vin') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="inspectionid" class="col-sm-3 col-form-label">Tech apžiūra</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="inspectionid" name="inspection" required>
                    <option value="Yra">Yra</option>
                    <option value="Nėra">Nėra</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="colorid" class="col-sm-3 col-form-label">Spalva</label>
            <div class="col-sm-4">
                <select class="col-sm-9 form-control" id="colorid" name="color" required>
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
                       value="{{ old('city') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="carimageid" class="col-sm-3 col-form-label">Pagrindinė nuotrauka</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="carimageid" required
                       value="{{ old('image') }}">
                <span style="margin-left: 15px; width: 480px;"></span>
            </div>
        </div>

        <div class="form-group row">
            <label for="descriptionid" class="col-sm-3 col-form-label">Transporto priemonės aprašymas</label>
            <div class="col-sm-9">
                <textarea name="description" type="text" class="form-control" id="descriptionid" placeholder="" required
                          value="{{ old('description') }}"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="timeid" class="col-sm-3 col-form-label">Pasirinkite auciono trukmę dienomis</label>
            <div class="col-sm-9">
                <input type="number" min="1" max="31" step="1" value="1" name="time" class="form-control" id="timeid" placeholder="" required
                       value="{{ old('time') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="priceid" class="col-sm-3 col-form-label">Pradinė aukciono kaina</label>
            <div class="col-sm-9">
                <input type="text" name="price" class="form-control" id="priceid" placeholder="" required
                       value="{{ old('price') }}">
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








