@extends('layouts.basicForm')

@section('content')
    <div class="container-sm">
        <div class="align-content-center">
            <h3>
                <span>Laboratório de Diagnósticos Moleculares - UFV/CRP</span>
            </h3>
            <h6 class="col-sm-10">
                <p></p>
                <p>Formulário de envio de amostras</p>
                <p>Prezado(a) agente de saúde, favor preencher os dados abaixo para nos deixar preparados para receber seu material. Não há necessidade de levar impresso.</p>
                <p>Preencha com cuidado pois o laudo será elaborado conforme as informações deste formulário.</p>
                <p>Por gentileza, procure preencher os dados na data da coleta da amostra, antes de encaminhá-las para o laboratório. O laboratório irá receber amostras de segunda à sexta-feira, entre 14h30 e 16h30, e aos sábados entre 11h e meio-dia.</p>
                <p>As amostras devem ficar armazenadas em geladeira e transportadas sempre na vertical em caixas térmicas adequadas. </p>
                <p>NUNCA DOBREM OS SWABS! SEMPRE CORTAR COM TESOURA ESTERILIZADA.</p>
                <p>Quaisquer dúvidas entre em contato:</p>
                <p>
                    <a href="diagnosticosmoleculares@ufv.br">diagnosticosmoleculares@ufv.br</a>
                </p>
                <p>(34) 3855-9553</p>
            </h6>
        </div>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{route('samples.store')}}" method="post">
            <!--Email-->
            <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label .col-form-label">Email</label>
                <div class="col-sm-10">
                    <input placeholder="Email" type="email" class="form-control" id="email" name="email" value="{{old('email',null)}}" >
                </div>
            </div>

            <!--Date_Sample-->
            <div class="form-group">
                <div class="form md-outline input-with-post-icon datepicker col-sm-10">
                    <label for="sample_date">Data de envio das amostras</label>
                    <input placeholder="Select date" type="date" class="form-control" id="sample_date" name="sample_date" value="{{old('sample_date',null)}}">
                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                </div>
            </div>

            <!--Number_GAL-->

            <div class="form-group col-sm-10">
                <label for="gal_requisition">Número da requisição GAL</label>
                <div>
                    <input placeholder="Número GAL" type="text" class="form-control" id="gal_requisition" name="gal_requisition" value="{{old('gal_requisition',null)}}">
                </div>
            </div>

            <!--Name-->

            <div class="form-group col-sm-10">
                <label for="name">Nome do paciente</label>
                <div>
                    <input placeholder="Nome" type="text" class="form-control" id="name" name="name" value="{{old('name',null)}}">
                </div>
            </div>

            <!--Age-->

            <div class="form-group">
                <label for="age" class="col-sm-2 col-form-label">Idade</label>
                <div class="col-sm-10">
                    <input placeholder="Idade" type="number" class="form-control" id="age" name="age" value="{{old('age',null)}}">
                </div>
            </div>

            <!--Sex-->
            <div class="form-group col-sm-10">
                <label for="sex">Sexo</label>
                <select class="form-control" id="sex" name="sex">
                    <option value="">Selecione uma opção</option>
                    <option value="M" @if (old('sex') == 'M') selected="selected" @endif>Masculino</option>
                    <option value="F" @if (old('sex') == 'F') selected="selected" @endif>Feminino</option>
                    <option value="T" @if (old('sex') == 'T') selected="selected" @endif>Transgênero</option>
                </select>
            </div>

            <!--Birth_date-->
            <div class="form-group">
                <div class="form md-outline input-with-post-icon datepicker col-sm-10">
                    <label for="birth_date">Data de nascimento</label>
                    <input placeholder="Select date" type="date" class="form-control" id="birth_date" name="birth_date" value="{{old('birth_date',null)}}">
                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                </div>
            </div>


            <!--City-->
            <div class="form-group col-sm-10">
                <label for="city">Município da notificação</label>
                <select class="form-control" id="city" name="city">
                    <option>Selecione um município</option>
                    @foreach(\App\Http\Resources\CityList::CITY as $city)
                        <option value="{{$city}}") @if(old('city') == $city) selected="selected" @endif>{{$city}}</option>
                    @endforeach
                </select>
            </div>

            <!--Residential_City-->
            <div class="form-group col-sm-10">
                <label for="residential_city">Município de residência do paciente</label>
                <select class="form-control" id="residential_city" name="residential_city">
                    <option>Selecione um município</option>
                    @foreach(\App\Http\Resources\CityList::CITY as $city)
                        <option value="{{$city}}") @if(old('residential_city') == $city) selected="selected" @endif>{{$city}}</option>
                    @endforeach
                </select>
            </div>

            <!--Beginning_symptom_date-->

            <div class="form-group col-sm-10">
                <label for="beginning_symptom_date">Tempo desde início dos sintomas</label>
                <select class="form-control" id="beginning_symptom_date" name="beginning_symptom_date">
                    <option value="">Selecione uma opção</option>
                    <option value="ate_3" @if (old('beginning_symptom_date') == 'ate_3') selected="selected" @endif>Até 3 dias</option>
                    <option value="4_a_6" @if (old('beginning_symptom_date') == '4_a_6') selected="selected" @endif>4 a 6 dias</option>
                    <option value="7_a_9" @if (old('beginning_symptom_date') == '7_a_9') selected="selected" @endif>7 a 9 dias</option>
                    <option value="10+" @if (old('beginning_symptom_date') == '10+') selected="selected" @endif>10 dias ou mais</option>
                    <option value="assintomatico" @if (old('beginning_symptom_date') == 'assintomatico') selected="selected" @endif>Assintomático</option>
                </select>
            </div>

            <!--Collection_sample_date-->
            <div class="form-group">
                <div class="form md-outline input-with-post-icon datepicker col-sm-10">
                    <label for="collection_sample_date">Data de coleta amostra</label>
                    <input placeholder="Select date" type="date" class="form-control" id="collection_sample_date" name="collection_sample_date" value="{{old('collection_sample_date',null)}}">
                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
                </div>
            </div>

            <!--Patient_status-->

            <div class="form-group col-sm-10">
                <label for="patient_status">Situação do paciente</label>
                <select class="form-control" id="patient_status" name="patient_status">
                    <option value ="">Selecione uma opção</option>
                    <option value="liberado" @if (old('patient_status') == 'liberado') selected="selected" @endif>Liberado</option>
                    <option value="hospitalizado" @if (old('patient_status') == 'hospitalizado') selected="selected" @endif>Hospitalizado</option>
                    <option value="obito" @if (old('patient_status') == 'obito') selected="selected" @endif>Óbito</option>
                </select>
            </div>


            <div class="form-group col-sm-10">
                <div>Método de coleta</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collect_method" name="collect_method" value="swab_nasofaringe" @if(is_array(old('collect_method')) && in_array("swab_nasofaringe", old('gridCheck'))) checked @endif>
                        <label class="form-check-label" for="gridCheck1">
                            Swab Nasofaringe
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collect_method" name="collect_method" value="swab_orofaringe" @if(is_array(old('collect_method')) && in_array("swab_orofaringe", old('gridCheck'))) checked @endif>
                        <label class="form-check-label" for="gridCheck2">
                            Swab Orofaringe
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collect_method" name="collect_method" value="lavado_broncoalveolar" @if(is_array(old('collect_method')) && in_array("lavado_broncoalveolar", old('gridCheck'))) checked @endif>
                        <label class="form-check-label" for="gridCheck3">
                            Lavado Broncoalveolar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collect_method" name="collect_method" value="saliva" @if(is_array(old('collect_method')) && in_array("saliva", old('gridCheck'))) checked @endif>
                        <label class="form-check-label" for="gridCheck4">
                            Saliva ou escarro
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collect_method" name="collect_method" value="aspirado_traqueal" @if(is_array(old('collect_method')) && in_array("aspirado_traqueal", old('gridCheck'))) checked @endif>
                        <label class="form-check-label" for="gridCheck5">
                            Aspirado traqueal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collect_method" name="collect_method" value="post_mortem" @if(is_array(old('collect_method')) && in_array("post_mortem", old('gridCheck'))) checked @endif>
                        <label class="form-check-label" for="gridCheck6">
                            Coleta "post-mortem"
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
    </div>


@endsection
