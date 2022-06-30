<!-- Invitation Modal -->
<div class="modal fade" id="Send-InvitationModal" tabindex="-1" role="dialog" aria-labelledby="Send-InvitationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Send-InvitationModalLabel">Send Invitations</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" name="file_type" id="file_type">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div>Add Email (Press enter ro add more)</div>
                            <input type="text" class="form-control pt-1 pb-3" name="emails" id="email-tags" placeholder="Add Emails">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary add-post-close-btn"  data-dismiss="modal" aria-label="Close">Close</button>
                <button type="button" class="btn btn-primary add-post-upload-btn">Send</button>
            </div>
        </div>
    </div>
</div>