<div class="modal fade" id="addGameModal" tabindex="-1" role="dialog" aria-labelledby="addGameModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGameModalLabel">{{ $game->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" id="addGameForm">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="purchase-price" class="col-form-label">Purchase Price:</label>
                                <input type="text" class="form-control" id="purchase-price" placeholder="$">
                            </div>
                            <div class="col-6">
                                <label for="purchase-date" class="col-form-label">Purchase Date:</label>
                                <input type="text" class="form-control" id="purchase-date" value="{{ date('m/d/y') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="purchase-location" class="col-form-label">Purchase Location:</label>
                                <input type="text" class="form-control" id="purchase-location">
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="purchase-new" checked>
                                    <label class="form-check-label" for="purchase-new">
                                        Purchase New
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="cib" checked>
                                    <label class="form-check-label" for="cib">
                                        CIB
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="cart-disc" checked>
                                    <label class="form-check-label" for="cart-disc">
                                        Cart/Disc
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="game-box" checked>
                                    <label class="form-check-label" for="game-box">
                                        Box
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="game-manual" checked>
                                    <label class="form-check-label" for="game-manual">
                                        Manual
                                    </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <label for="game-condition">Game Condition</label>
                                <select class="form-control" id="game-condition">
                                    <option>10</option>
                                    <option>9</option>
                                    <option>8</option>
                                    <option>7</option>
                                    <option>6</option>
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment" class="col-form-label">Comment:</label>
                        <textarea class="form-control" id="comment"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="add-game-submit btn btn-primary" id="{{ $game->id . '-' . $companyId }}">Add</button>
            </div>
        </div>
    </div>
</div>