<!DOCTYPE html>
<html>
<head>
    <title>Snoopy Lab</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap4/bootstrap.min.css') }}"> --}}
    <!-- STYLE CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('vendor/style/style.css')}}"> --}}
<style>
    .main{
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        
    }
    .form-name{
        color: red;
        font-weight: bold;
        text-align:center;
    }
    .title-form{
        border: 3px solid black;
    }
        
        
    
    .part-name{
        text-decoration: underline;

    }
    .avis-name{
        font-weight: bold;
    }


    div.head-form{
        display: flex;
    /* -ms-flex-wrap: wrap; */
    /* flex-wrap: wrap; */
    }
    div.document{
        float: left;
        width: 50%;
    }
    div.reference{
        float: right;
    }
    input.put{
        border: 2px solid;
        margin-left: 30%;
    }
    input.put2{
        border: 2px solid;
        margin-left: 33%;
    }
    table.borded{
        border-collapse: collapse;
    }
    .coller{
        margin-top: 0;
        margin-bottom: 0;
         border-collapse: collapse;
    }
    tr{
        height: 27px;
    }
    td{
        width: 150px;
        height: 23px;
        border: 2px solid black;
    }
    th{
        width: 300px;
    }
    th.avis-th{
        border: 2px solid black;
    }
    .tab-title{
        text-align: left;
    }
    .tab-text{
        text-align: right;
    }
    .controle-technique {
        border: 2px solid black;
    }

    .avis-motive{
        border: 2px solid black;
    }
    div.controle{
        
        float: left;
        width: 50%;
    }
    div.traitement{
        float: right;
        margin-bottom: 10px;
    }
</style>
</head>
<body>
    <div class="main">
        <div class="toprint">
            <div>
                <h2 class="title-form form-name">SnoopyLAB</h2>
                <form action="">
                    <div class="head-form">
                        <div class="document">
                            <div>
                                <h3>1. <span class="part-name">DOCUMENT</span></h3>
                            </div>
                            <label for="">Recu le : {{ $alls->date }}</label><br>
                            <label for="">Nature N* : {{ $alls->nature }}</label><br>
                            <label for="">Devise : {{ $alls->devise }} </label><br>
                            <label for="">Montant : {{ $alls->montant }}</label><br>
                            <label for="">A deduire : {{ $alls->deduire }}</label><br>
                        </div>
                        <div class="reference">
                            <div>
                                <h3>2. <span class="part-name">REFERENCE DU CONTRAT</span></h3>
                            </div>
                            <label for="">Beneficiaire : {{ $alls->beneficiaire }}</label><br>
                            <label for="">Compte du beneficiaire : {{ $alls->compteBeneficiaire }}</label><br>
                            <label for="">Banque : {{ $alls->banque }}</label><br>
                            <label for="">Objet : {{ $alls->objet }}</label><br>
                            <label for="">Date de signature : {{ $alls->dateDeSignature }}</label><br>
                            <label for="">Date de cloture : {{ $alls->dateDeCloture }}</label><br>
                            <label for="">Financement : {{ $alls->financement }}</label><br>
                            <label for="">Categorie : {{ $alls->categorie }}</label><br>
                            <label for="">Montant : {{ $alls->montantRef }} </label><br>
                            <label for="">Marche : {{ $alls->marche }} </label><br>
                        </div>

                    </div>

                    <div class="">
                        <div class="etat">
                            <div>
                                <h3>3. <span class="part-name">ETAT DE DECAISSEMENT</span></h3>
                            </div>
                            <table class="borded">
                                <tr>
                                    <th  class="tab-title">Montants debourses</th>
                                    <td class="tab-text"> {{ $alls->montantDebourse }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">Non decaisse</th>
                                    <td class="tab-text"> {{ $alls->marche }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">Paiement a executer</th>
                                    <td class="tab-text"> {{ $alls->paiement }}</td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                    <div class="head-form">
                        <div class="controle">
                            <div>
                                <h3>4. <span class="part-name">CONTROLE TECHNIQUE</span></h3>
                            </div>
                            <table class="borded controle-technique">
                                <tr>
                                    <th class="tab-title">* Lettre de marche </th>
                                    <td class="tab-text"> {{ $alls->lettreDeMarche }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Reception </p></th>
                                    <td class="tab-text"> {{ $alls->reception }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Rapport</th>
                                    <td class="tab-text"> {{ $alls->rapport }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Cahier des attachements</th>
                                    <td class="tab-text"> {{ $alls->cahier }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Conformite au bordereau des prix</th>
                                    <td class="tab-text"> {{ $alls->conformite }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Signat pour reception Sces par beneficiaire</th>
                                    <td class="tab-text"> {{ $alls->signat }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Rapport de reception provisioire/definitive</th>
                                    <td class="tab-text"> {{ $alls->rapportDeReception }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Retenue de garanties</th>
                                    <td class="tab-text"> {{ $alls->retenue }}</td>
                                </tr>
                                <tr>
                                    <th class="tab-title">* Validation des prestations</th>
                                    <td class="tab-text"> {{ $alls->validation }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="traitement">
                            <div>
                                <h3>5. <span class="part-name">TRAITEMENT A PRIORI/DG</span></h3>
                            </div>
                            <table class="tab-traitement">
                                <tr>
                                    <td class= "coller tab-text">Par :</td>
                                    <td class="tab-text">X</td>
                                </tr>
                                <tr>
                                    <td class= "coller tab-text">Date :</td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="head-form">
                        <div class="avis">
                            <div>
                                <h3>#. <span class="avis-name">AVIS MOTIVE DU</span></h3>
                            </div>
                            <table class="borded avis-motive">
                                <tr>
                                    <th>Charge du dossier</th>
                                    <th class="avis-th">Chef de division</th>
                                    <th class="avis-th">Directeur</th>
                                </tr>
                                <tr>
                                    <td>Nom & Signature <br>Date</td>
                                    <td>Nom & Signature <br>Date</td>
                                    <td>Nom & Signature <br>Date</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div>
        <button id="print">Imprimer</button>
    </div>

    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('js/printThis.js')}}"></script>
    <script>
        $('#print').click(function(){
            $('.toprint').printThis({
                debug: false,               // show the iframe for debugging
                importCSS: true,            // import parent page css
                importStyle: true,         // import style tags
                printContainer: true,       // print outer container/$.selector
                loadCSS: "",   // path to additional css file - use an array [] for multiple
                pageTitle: "",              // add title to print page
                removeInline: false,        // remove inline styles from print elements
                removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
                printDelay: 333,            // variable print delay
                header: null,               // prefix to html
                footer: null,               // postfix to html
                base: false,                // preserve the BASE tag or accept a string for the URL
                formValues: true,           // preserve input/form values
                canvas: false,              // copy canvas content
                doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
                removeScripts: false,       // remove script tags from print content
                copyTagClasses: true,      // copy classes from the html & body tag
                beforePrintEvent: null,     // callback function for printEvent in iframe
                beforePrint: null,          // function called before iframe is filled
                afterPrint: null  
            });
        })
    </script>
    
</body>
</html>