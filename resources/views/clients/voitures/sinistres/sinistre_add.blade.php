<form class="col-md-12" action="{{URL::to('clients/voitures/sinistres/add')}}" method="POST">
    @csrf

        <input type="hidden" name="voiture_id" id="voiture_id" value="{{$voiture->id}}">


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="bg-gradient-warning form-row border-top border-bottom">
                        <div class="form-group col-md-6">
                            <label for="dn">Date Sénistre</label>
                            <input type="date" class="form-control" name="sinistre_date"  id="sinistre_date" value="{{date("Y-m-d")}}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="station_id">Type Sinistre</label>
                            <select class="custom-select" name="sinistre_id"  id="sinistre_id" required>
                                <option value="1" >  Collision</option>
                                <option value="2" >  Bris de glace</option>
                                <option value="3" >  Vol</option>
                                <option value="4" >  Stationnement</option>
                                <option value="5" >  Incendie</option>
                                <option value="6" >  Vandalisme</option>
                                <option value="7" >  Evenements natuels</option>
                            </select>
                            <div class="invalid-tooltip">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
