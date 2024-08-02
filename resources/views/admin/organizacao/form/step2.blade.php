<div class="tab">
    <div class="form-card text-start">

        <div class="row ">
            <div class="col-7">
                {{-- <p class="steps fs- mb-0">Fase 2 - 4</p> --}}
                <h3 class="mb-4">Documentos da Organização</h3>
            </div>

        </div>
        <div class="row">
            @foreach ($documentos as $documento)
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label fw-semibold">{{ $documento->documento }}:</label>
                    
                        <input type="file" name="documentos[{{ $documento->id }}][documento]" class="form-control " value="{{ old('documentos.'.$documento->id.'.documento') }}" >
                        <input type="hidden" name="documentos[{{ $documento->id }}][id]" value="{{ $documento->id }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
