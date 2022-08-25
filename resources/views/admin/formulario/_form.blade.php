@csrf

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $txtTitle }}</h3>
            <a class="btn btn-danger-light btn-sm ml-auto" href="#">Regresar</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="form-label">¿Tiene Ruc?</label>
                        <input type="text" name="ruc"
                            class="form-control @error('ruc') form-control is-invalid state-invalid @enderror"
                            placeholder="Si es asi Ingresa el Ruc" value="{{ old('ruc', $formulario->ruc) }}">
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Razón social</label>
                        <input type="text" name="razon_social"
                            class="form-control @error('razon_social') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa la razón social"
                            value="{{ old('razon_social', $formulario->razon_social) }}">
                        @error('razon_social')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nombre Comercial</label>
                        <input type="text" name="nombre_comercial"
                            class="form-control @error('nombre_comercial') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el Nombre Comercial"
                            value="{{ old('nombre_comercial', $formulario->nombre_comercial) }}">
                        @error('nombre_comercial')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Número Colaboradores</label>
                        <input type="number" name="colaboradores"
                            class="form-control @error('colaboradores') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el Numero de Colaboradores"
                            value="{{ old('colaboradores', $formulario->colaboradores) }}">
                        @error('colaboradores')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Dirección</label>
                        <input type="text" name="direccion"
                            class="form-control @error('direccion') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa la Direccion"
                            value="{{ old('direccion', $formulario->direccion) }}">
                        @error('direccion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Provincia</label>
                        <input type="text" name="provincia"
                            class="form-control @error('provincia') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa la Provincia"
                            value="{{ old('provincia', $formulario->provincia) }}">
                        @error('provincia')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Cantón</label>
                        <input type="text" name="canton"
                            class="form-control @error('canton') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el Canton"
                            value="{{ old('canton', $formulario->canton) }}">
                        @error('canton')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Parroquia</label>
                        <input type="text" name="parroquia"
                            class="form-control @error('parroquia') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa la Parroquia"
                            value="{{ old('parroquia', $formulario->parroquia) }}">
                        @error('parroquia')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label class="form-label">Telefono Contacto</label>
                        <input type="text" name="telefono"
                            class="form-control @error('telefono') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el Telefono de Contacto"
                            value="{{ old('telefono', $formulario->telefono) }}">
                        @error('telefono')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label class="form-label">Formacion Academica</label>
                        <select name="formacion_id" id="formacion_id"
                            class="form-control select2-show-search @error('formacion_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige una Formacion">
                            @foreach ($formaciones as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('formacion_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Titular Representante/Legal</label>
                        <input type="text" name="representante"
                            class="form-control @error('representante') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el Titular Representante/legal"
                            value="{{ old('representante', $formulario->representante) }}">
                        @error('representante')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Correo Electronico de la Empresa</label>
                        <input type="email" name="email"
                            class="form-control @error('email') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el Correo Electronico de la Empresa"
                            value="{{ old('email', $formulario->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Genero del Representante</label>
                        <select name="genero_id" id="genero_id"
                            class="form-control select2-show-search @error('genero_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige una Formacion">
                            @foreach ($generos as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('genero_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Logo</label>
                        <p class="auto-style3">
                            <input name="logo" class="inputlogo" type="radio" value="No" />
                            &nbsp;
                            <span class="auto-style4">
                                No
                            </span>
                        </p>

                        <p class="auto-style3">
                            <input name="logo" class="inputlogo" type="radio" value="Si" />
                            &nbsp;
                            <span class="auto-style4">
                                Si
                            </span>
                        </p>

                        <div id="logo" style="display:none;">
                            <input type="file" name="logo"
                                class="form-control @error('logo') form-control is-invalid state-invalid @enderror"
                                placeholder="Ingresa el sitio web (opcional)"
                                value="{{ old('logo', $formulario->logo) }}">
                            @error('logo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>

                    <!-- {{-- <div class="form-group">
                        <label class="form-label">Colaboradores</label>
                        <select name="country_id" id="country_id"
                            class="form-control select2-show-search @error('country_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige un pais">
                            @foreach ($countries as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('country_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    {{-- <div class="form-group">
                        <label id="state_id" class="form-label">Estado</label>
                        <select name="state_id" id="country_id"
                            class="form-control select2-show-search @error('state_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige un Estado">
                            <option value=""></option>
                        </select>
                        @error('state_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    {{-- <div class="form-group">
                        <label id="city_id" class="form-label">Ciudad</label>
                        <select name="city_id" id="state_id"
                            class="form-control select2-show-search @error('city_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige una ciudad">
                            <option value=""></option>
                        </select>
                        @error('city_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}} -->


                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="form-label">Número Establecimientos</label>
                        <input type="number" name="numero_establecimientos"
                            class="form-control @error('numero_establecimientos') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el Numero de Establecimientos"
                            value="{{ old('numero_establecimientos', $formulario->numero_establecimientos) }}">
                        @error('numero_establecimientos')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Inicio Actividades de la empresa</label>
                        <input type="date" name="fecha_actividades"
                            class="form-control @error('fecha_actividades') form-control is-invalid state-invalid @enderror"
                            placeholder="Ingresa el sitio web (opcional)"
                            value="{{ old('fecha_actividades', $formulario->fecha_actividades) }}">
                        @error('fecha_actividades')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Categoría de la Empresa</label>
                        <select name="categorias_id" id="categorias_id"
                            class="form-control select2-show-search @error('categorias_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige una Formacion">
                            @foreach ($categorias as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('categorias_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Productos o Servicios</label>
                        <select name="servicios_id" id="servicios_id"
                            class="form-control select2-show-search @error('servicios_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige una Opcion">
                            @foreach ($servicios as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('servicios_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Productos de Comercio Justo</label>
                        <select name="comercio_id" id="comercio_id"
                            class="form-control select2-show-search @error('comercio_id') form-control select2-show-search is-invalid state-invalid @enderror"
                            data-placeholder="Elige una Opcion">
                            @foreach ($comercios as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('comercio_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Comercio Exterior</label>
                        <p class="auto-style3">
                            <input name="exterior" class="inputexterior" type="radio" value="No" />
                            &nbsp;
                            <span class="auto-style4">
                                No
                            </span>
                        </p>

                        <p class="auto-style3">
                            <input name="exterior" class="inputexterior" type="radio" value="Si" />
                            &nbsp;
                            <span class="auto-style4">
                                Si
                            </span>
                        </p>

                        <div id="exterior" style="display:none;">
                            <label class="form-label">Importanciones</label>
                            <input type="text" name="importaciones"
                                class="form-control @error('importaciones') form-control is-invalid state-invalid @enderror"
                                placeholder="Ingresa las importaciones (opcional)"
                                value="{{ old('importaciones', $formulario->importaciones) }}">
                            @error('importaciones')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <label class="form-label">Exportaciones</label>
                            <input type="text" name="exportaciones"
                                class="form-control @error('exportaciones') form-control is-invalid state-invalid @enderror"
                                placeholder="Ingresa el exportaciones (opcional)"
                                value="{{ old('exportaciones', $formulario->exportaciones) }}">
                            @error('exportaciones')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Localizacion</label>
                            <input type="text" name="localizacion"
                                class="form-control @error('localizacion') form-control is-invalid state-invalid @enderror"
                                placeholder="Ingresa la Localizacion"
                                value="{{ old('localizacion', $formulario->localizacion) }}">
                            @error('localizacion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="form-label">Ubicacion Empresa</label>
                            <input type="file" name="ubicacion_empresa"
                                class="form-control @error('ubicacion_empresa') form-control is-invalid state-invalid @enderror"
                                placeholder="Ingresa la ubicacion de la empresa (opcional)"
                                value="{{ old('ubicacion_empresa', $formulario->ubicacion_empresa) }}">
                            @error('ubicacion_empresa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Comersio Electronico</label>
                            <input type="text" name="comercio_electronico"
                                class="form-control @error('comercio_electronico') form-control is-invalid state-invalid @enderror"
                                placeholder="Ingresa el Comercio Electronico"
                                value="{{ old('comercio_electronico', $formulario->comercio_electronico) }}">
                            @error('comercio_electronico')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">Capacitaciones</label>

                            <p class="auto-style3">
                                <input name="capacitaciones" class="inputcapacitaciones" type="radio" value="No" />
                                &nbsp;
                                <span class="auto-style4">
                                    No
                                </span>
                            </p>

                            <p class="auto-style3">
                                <input name="capacitaciones" class="inputcapacitaciones"  type="radio" value="Si" />
                                &nbsp;
                                <span class="auto-style4">
                                    Si
                                </span>
                            </p>

                            <div id="capacitaciones" style="display:none;">
                                <textarea class="form-control @error('capacitaciones') form-control is-invalid state-invalid @enderror"
                                    name="capacitaciones" rows="4" placeholder="Introduce las Capacitaciones...">{{ old('capacitaciones', $formulario->capacitaciones) }}</textarea>
                                @error('capacitaciones')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="form-label">Pagina Web</label>

                            <p class="auto-style3">
                                <input name="pagina" class="inputpagina" type="radio" value="No" />
                                &nbsp;
                                <span class="auto-style4">
                                    No
                                </span>
                            </p>

                            <p class="auto-style3">
                                <input name="pagina" class="inputpagina" type="radio" value="Si" />
                                &nbsp;
                                <span class="auto-style4">
                                    Si
                                </span>
                            </p>

                            <div id="pagina" style="display:none;">
                                <input type="text" name="pagina_web"
                                    class="form-control @error('pagina_web') form-control is-invalid state-invalid @enderror"
                                    placeholder="Ingresa el sitio web (opcional)"
                                    value="{{ old('pagina_web', $formulario->pagina_web) }}">
                                @error('pagina_web')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>


                        <div class="form-group">
                            <label class="form-label">Redes Sociales</label>

                            <p class="auto-style3">
                                <input name="redes" class="inputredes" type="radio" value="No" />
                                &nbsp;
                                <span class="auto-style4">
                                    No
                                </span>
                            </p>

                            <p class="auto-style3">
                                <input name="redes" class="inputredes" type="radio" value="Si" />
                                &nbsp;
                                <span class="auto-style4">
                                    Si
                                </span>
                            </p>

                            <div id="redes" style="display:none;">
                                <input type="text" name="redes_sociales"
                                    class="form-control @error('redes_sociales') form-control is-invalid state-invalid @enderror"
                                    placeholder="Ingresa su red Social (opcional)"
                                    value="{{ old('redes_sociales', $formulario->redes_sociales) }}">
                                @error('redes_sociales')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label">Whatsapp</label>
                            <input type="text" name="whatssapp"
                                class="form-control @error('whatssapp') form-control is-invalid state-invalid @enderror"
                                placeholder="Ingresa Whatsapp"
                                value="{{ old('whatssapp', $formulario->whatssapp) }}">
                            @error('whatssapp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>




                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="btn-list text-center">
                <button type="submit" style="background-color: #e28b00; border-color: #e28b00;" class="btn {{ $btnColor }} btn-block"><i class="icon-cloud-upload"></i>
                    {{ $btnTitle }}</button>
            </div>
        </div>
    </div>
</div>
