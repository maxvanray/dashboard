<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    <i class="fa fa-plus"></i> Create Event
                </h4>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" id="new-event" class="form-control" placeholder="Event">
                    <div class="input-group-btn">
                        <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle"
                                data-toggle="dropdown">
                            Select
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" id="color-chooser">
                            <li>
                                <a class="palette-primary" href="#">1 - Primary</a>
                            </li>
                            <li>
                                <a class="palette-success" href="#">2 - Success</a>
                            </li>
                            <li>
                                <a class="palette-info" href="#">3 - Info</a>
                            </li>
                            <li>
                                <a class="palette-warning" href="#">4 - warning</a>
                            </li>
                            <li>
                                <a class="palette-danger" href="#">5 - Danger</a>
                            </li>
                            <li>
                                <a class="palette-default" href="#">6 - Default</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /btn-group -->
                </div>

                <div class="input-group" style="width: 100%">
                    <input type="textarea" id="new-event-description" class="form-control" placeholder="Event Description...">
                </div>
                <!-- /input-group -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-right" id="close_calendar_event"
                        data-dismiss="modal">
                    Close
                    <i class="fa fa-times"></i>
                </button>
                <button type="button" class="btn btn-success pull-left" id="add-new-event"
                        data-dismiss="modal">
                    <i class="fa fa-plus"></i> Add
                </button>
            </div>
        </div>
    </div>
</div>