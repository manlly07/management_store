<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Invoices</title>

    <!-- Custom fonts for this template -->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>

<body id="page-top">

    <div class="invoice-print p-4">

        <div class="d-flex justify-content-between flex-row">
            <div class="mb-4">
                <div class="d-flex svg-illustration align-items-center gap-2 mb-4">
                    <span class="app-brand-logo demo">
                        <span>
                            <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor"></path>
                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor"></path>
                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                                <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3"></path>
                            </svg>
                        </span>
                    </span>
                    <span class="h4 mb-0 app-brand-text fw-semibold">Materio</span>
                </div>
                <p class="mb-1 text-secondary">Công ty phân phối nước ngọt Võ Tin</p>
                <p class="mb-1 text-secondary">Thành phố Hồ Chí Minh</p>
                <p class="mb-0 text-secondary">+1 (123) 456 7891, +44 (876) 543 2198</p>
            </div>
            <div>
                <h4>INVOICE <span class="invoice-id">#86423</span></h4>
                <div class="mb-2">
                    <span>Date Issues:</span>
                    <span class="date-issues">April 25, 2021</span>
                </div>
            </div>
        </div>

        <hr>

        <div class="d-flex justify-content-between mb-4">
            <div class="my-2">
                <h6>Invoice To:</h6>
                <p class="mb-1 name">Thomas shelby</p>
                <p class="mb-1 address">Shelby Company Limited</p>
                <p class="mb-1 phone">Small Heath, B10 0HF, UK</p>
            </div>
            <div class="my-2">
                <h6>Bill To:</h6>
                <table>
                    <tbody>
                        <tr>
                            <td class="pe-3">Total Due:</td>
                            <td class="fw-medium total-due">$12,110.55</td>
                        </tr>
                        <tr>
                            <td class="pe-3">Method:</td>
                            <td class="method">Banking</td>
                        </tr>
                        <tr>
                            <td class="pe-3">Status:</td>
                            <td class="status">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table m-0">
                <thead class="table-light border-top">
                    <tr>
                        <th>Item</th>
                        <!-- <th>Description</th> -->
                        <th>Cost</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="tbody">

                    
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-12">
                <span class="fw-medium">Note:</span>
                <span class="note">It was a pleasure working with you and your team. We hope you will keep us in mind for future
                    freelance projects. Thank You!</span>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/datatables-demo.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script src="../../../js/checkURL.js"></script>
    <script type="text/javascript">
        $(document).ready(() => {
            var urlParams = new URLSearchParams(window.location.search);
            var id = urlParams.get('id');
            console.log(id);

            getInvoiceDetail(id)
        })

        const getInvoiceDetail = (id) => {
            $.ajax({
                url: 'http://localhost:3000/database/repository/invoices.php',
                type: 'POST',
                data: `action=getbyid&id=${id}`,
                success: (response) => {
                    console.log(JSON.parse(response));
                    let invoices = JSON.parse(response)
                    $('.invoices-id').html('#' + invoices[0].shipment_id)
                    $('.date-issues').html(invoices[0].shipment_date)
                    $('.name').html(invoices[0].supplier_name)
                    $('.address').html(invoices[0].supplier_address)
                    $('.phone').html(invoices[0].supplier_phone)
                    $('.total-due').html(invoices[0].total)
                    $('.method').html(invoices[0].shipping_method)
                    $('.status').html(invoices[0].status)
                    
                    invoices.forEach((invoice) => {
                        let tr = `
                            <tr>
                                <td class="text-nowrap text-heading item">${invoice.product_name}</td>
                                <td class="cost">${invoice.purchase_price}</td>
                                <td class="qty">${invoice.quantity}</td>
                                <td class="price">${invoice.purchase_price * invoice.quantity}</td>
                            </tr>
                        `;
                        $('.tbody').append(tr);
                    });
                    $('.tbody').append(`
                        <tr>
                            <td colspan="2" class="align-top px-4 py-3">
                                <p class="mb-2">
                                    <span class="me-1 fw-medium">Person:</span>
                                    <span class="personname">Alfie Solomons</span>
                                </p>
                                <span>Thanks for your business</span>
                            </td>
                            <td class="text-end px-4 py-3">
                                <p class="mb-2">Subtotal:</p>
                                <p class="mb-2">Discount:</p>
                                <p class="mb-2">Tax:</p>
                                <p class="mb-0">Total:</p>
                            </td>
                            <td class="px-4 py-3">
                                <p class="fw-medium mb-2 subtotal">${invoices[0].total}</p>
                                <p class="fw-medium mb-2">00.00</p>
                                <p class="fw-medium mb-2">00.00</p>
                                <p class="fw-medium mb-0 total">${invoices[0].total}</p>
                            </td>
                        </tr>
                    `)
                    // $('.note').html(invoices[0].note)

                    window.print()
                }
            })
        }
    </script>
</body>

</html>