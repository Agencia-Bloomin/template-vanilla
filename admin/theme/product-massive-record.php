<?php $this->layout("_theme"); ?>
<?php require __DIR__ . "/widgets/massive/sidebar.php"; ?>

<section class="dash_content_app nobasis">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle"><?= $title ?></h2>
    </header>
    <?php if (!empty($desc)) : ?>
        <p class="dash_content_sidebar_desc"><?= $desc ?></p>
    <?php endif; ?>

    <?php if (isset($recordModel) && $recordModel == "manual") : ?>
        <div class="dash_content_app_box ">
            <form action="<?= $formAction ?>" method="POST" enctype="multipart/form-data" class="app_form">
                <div class="app_form_titles excellmodel">
                    <label class="label">
                        <span class="legend">Nome:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Conteúdo:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Tags:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Url:</span>
                    </label>


                    <label class="label">
                        <span class="legend">Img nome:</span>
                    </label>


                    <label class="label">
                        <span class="legend">Categoria:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Ordenação:</span>
                    </label>
                </div>
                <div class="app_form_group excellmodel">
                    <label class="label">
                        <input type="text" name="name[]" placeholder="* Nome" required />
                    </label>

                    <label class="label">
                        <textarea name="content[]" placeholder="Conteúdo"></textarea>
                    </label>


                    <label class="label">
                        <div class="select-multiple-wrapper">
                            <div class="select-multiple-expand">
                                <input type="hidden" name="tags[]" value="" />
                                <div class="input-expand selection-box" data-holder="Tags"></div>
                                <select class="select-expand" multiple>
                                    <?php if (isset($tagsExistents) && count($tagsExistents) > 0) :
                                        foreach ($tagsExistents as $tag) : ?>
                                            <option value="<?= $tag->tag_name ?>"><?= $tag->tag_name ?></option>
                                    <?php
                                        endforeach;
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </label>

                    <label class="label">
                        <input type="text" name="url[]" placeholder="Url" />
                    </label>


                    <label class="label">
                        <input type="text" name="cover[]" placeholder="Nome img" />
                    </label>

                    <label class="label">
                        <div class="select-multiple-wrapper">
                            <div class="select-multiple-expand">
                                <input type="hidden" name="category_id[]" value="" />
                                <div class="input-expand selection-box" data-holder="* Categoria(s)"></div>
                                <select class="select-expand" multiple>
                                    <?php if (isset($categoriesExistents) && count($categoriesExistents) > 0) :
                                        foreach ($categoriesExistents as $cat) : ?>
                                            <option value="<?= $cat->name ?>"><?= $cat->name ?></option>
                                    <?php
                                        endforeach;
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </label>

                    <label class="label">
                        <input type="number" name="priority[]" placeholder="Ordenação" />
                    </label>

                </div>

                <div id="massiveSaveBtn" class="massiveSaveBtn">
                    <input type="hidden" name="type" value="<?= $type ?>">
                    <button type="submit" class="btn btn-green icon-check-square-o joinSelectedValues">Cadastrar</button>
                </div>
            </form>

            <div class="btns-box">
                <div class="btnAddCat addmore-btn-area">
                    <input type="number" id="multipleQuantity" placeholder="Quantas linhas?">
                    <button id="add_more">Linhas</button>
                </div>
                <div class="btnRemCat removeuseless-btn-area ml-3">
                    <button id="remove_useless">Linhas</button>
                </div>
            </div>

        </div>
    <?php endif; ?>

    <?php if (isset($recordModel) && $recordModel == "auto") : ?>
        <div class="dash_content_app_box ">
            <form action="<?= $formAction ?>" method="POST" enctype="multipart/form-data" class="app_form">
                <div class="app_form_titles excellmodel">
                    <label class="label">
                        <span class="legend">Nome:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Tags:</span>
                    </label>


                    <label class="label">
                        <span class="legend">Categoria:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Quantidade de itens:</span>
                    </label>


                </div>
                <div class="app_form_group excellmodel">
                    <label class="label">
                        <input type="text" name="name" placeholder="* Nome" required />
                    </label>


                    <label class="label">
                        <div class="select-multiple-wrapper">
                            <div class="select-multiple-expand">
                                <input type="hidden" name="tags" value="" />
                                <div class="input-expand selection-box" data-holder="Tags"></div>
                                <select class="select-expand" multiple>
                                    <?php if (isset($tagsExistents) && count($tagsExistents) > 0) :
                                        foreach ($tagsExistents as $tag) : ?>
                                            <option value="<?= $tag->tag_name ?>"><?= $tag->tag_name ?></option>
                                    <?php
                                        endforeach;
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </label>

                    <label class="label">
                        <div class="select-multiple-wrapper">
                            <div class="select-multiple-expand">
                                <input type="hidden" name="category_id" value="" />
                                <div class="input-expand selection-box" data-holder="* Categoria(s)"></div>
                                <select class="select-expand" multiple>
                                    <?php if (isset($categoriesExistents) && count($categoriesExistents) > 0) :
                                        foreach ($categoriesExistents as $cat) : ?>
                                            <option value="<?= $cat->name ?>"><?= $cat->name ?></option>
                                    <?php
                                        endforeach;
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </label>

                    <label class="label">
                        <input type="number" name="record_mult" value="" placeholder="Quantidade" />
                    </label>

                </div>


                <div id="massiveSaveBtn" class="massiveSaveBtn">

                    <input type="hidden" name="type" value="<?= $type ?>">
                    <button type="submit" class="btn btn-green icon-check-square-o joinSelectedValues">Cadastrar</button>
                </div>
            </form>

        </div>
    <?php endif; ?>

    <?php if (isset($recordModel) && $recordModel == "excel") : ?>
        <div class="dash_content_app_box ">
            <div class="drop-area" ondragover="event.preventDefault()" ondrop="event.preventDefault(); handleFileDrop(event)">
                <div class="drop-area__text">Arraste e solte o arquivo aqui</div>
                <input type="file" id="fileElem" style="display:none" onchange="handleFiles(this.files)">
                <label class="drop-area__button" for="fileElem">Clique para selecionar um arquivo</label>
            </div>




            <!-- <form action="<?= $formAction ?>" method="POST" enctype="multipart/form-data" class="app_form">
                <div class="app_form_titles excellmodel">
                    <label class="label">
                        <span class="legend">Nome:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Tags:</span>
                    </label>


                    <label class="label">
                        <span class="legend">Categoria:</span>
                    </label>

                    <label class="label">
                        <span class="legend">Quantidade de itens:</span>
                    </label>


                </div>
                <div class="app_form_group excellmodel">
                    <label class="label">
                        <input type="text" name="name" placeholder="* Nome" required />
                    </label>


                    <label class="label">
                        <div class="select-multiple-wrapper">
                            <div class="select-multiple-expand">
                                <input type="hidden" name="tags" value="" />
                                <div class="input-expand selection-box" data-holder="Tags"></div>
                                <select class="select-expand" multiple>
                                    <?php if (isset($tagsExistents) && count($tagsExistents) > 0) :
                                        foreach ($tagsExistents as $tag) : ?>
                                            <option value="<?= $tag->tag_name ?>"><?= $tag->tag_name ?></option>
                                    <?php
                                        endforeach;
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </label>

                    <label class="label">
                        <div class="select-multiple-wrapper">
                            <div class="select-multiple-expand">
                                <input type="hidden" name="category_id" value="" />
                                <div class="input-expand selection-box" data-holder="* Categoria(s)"></div>
                                <select class="select-expand" multiple>
                                    <?php if (isset($categoriesExistents) && count($categoriesExistents) > 0) :
                                        foreach ($categoriesExistents as $cat) : ?>
                                            <option value="<?= $cat->name ?>"><?= $cat->name ?></option>
                                    <?php
                                        endforeach;
                                    endif; ?>
                                </select>
                            </div>
                        </div>
                    </label>

                    <label class="label">
                        <input type="number" name="record_mult" value="" placeholder="Quantidade" />
                    </label>

                </div>


                <div id="massiveSaveBtn" class="massiveSaveBtn">
                    
                    <input type="hidden" name="type" value="<?= $type ?>">
                    <button type="submit" class="btn btn-green icon-check-square-o joinSelectedValues">Cadastrar</button>
                </div>
            </form> -->

        </div>
    <?php endif; ?>
</section>



<?php
// Cria um objeto da lista de array existentes compativel com JS.
$urlArrayList = [];
if (!empty($allUrls)) {
    foreach ($allUrls as $url) {
        array_push($urlArrayList, $url->url);
    }
    $arrayListEncod = json_encode($urlArrayList);
}
?>

<?php $this->start("scripts"); ?>

<script>
    // *** Função que busca os campos multiples e preenche os seus inputs ***
    const joinSelectedValues = document.getElementsByClassName('joinSelectedValues');
    if (joinSelectedValues && joinSelectedValues.length > 0) {
        // Estrutura para adicionar os valores dos selects aos seus respectivos inputs para envio para o servidor
        joinSelectedValues[0].addEventListener('click', function getSelectedValues() {
            var selectsBoxes = document.querySelectorAll('.select-multiple-expand'); // categorias multiplas

            if (selectsBoxes) {

                selectsBoxes.forEach((select) => {
                    let selectedValues = [];
                    const input = select.querySelector('input');
                    const selectChoiced = select.querySelectorAll('.selection-box [data-name="selection[]"]');

                    selectChoiced.forEach((option) => {
                        const optionValueAdjsuted = option.getAttribute('data-value').trim();
                        selectedValues.push(optionValueAdjsuted);
                    })

                    input.value = selectedValues.join(',');
                });
            }
        })
    }
    // *** Função que replica as rows do formulario pela quantidade desejada limpando os inputs ***
    const add_more = document.getElementById('add_more');
    const remove_useless = document.getElementById('remove_useless');

    function multiplicateLabels() {
        const multipleQuantity = document.getElementById('multipleQuantity');

        const appFormGroup = document.querySelector('.app_form_group');
        const massiveSaveBtn = document.getElementById('massiveSaveBtn');
        const quantity = multipleQuantity.value !== '' ? multipleQuantity.value : 1;

        if (quantity > 0) {
            for (let i = 0; i < quantity; i++) {
                let newAppFormGroup = appFormGroup.cloneNode(true);

                newAppFormGroup.querySelectorAll('.select-multiple-wrapper').forEach((e) => {
                    e.dataset.eventsAdded = false
                    e.querySelector('.input-expand').innerHTML = '';
                    e.querySelectorAll('.select-expand option').forEach((option) => {
                        option.style.display = 'block';
                    })
                })
                newAppFormGroup.querySelectorAll('input, textarea').forEach(input => {
                    input.value = '';
                })
                massiveSaveBtn.insertAdjacentElement('beforebegin', newAppFormGroup);
            }
        }
        runMultiSelector()
    }
    if (add_more) {
        add_more.addEventListener('click', multiplicateLabels)
    }

    function removeUselessRows() {
        const appFormGroup = document.querySelectorAll('.app_form_group');

        appFormGroup.forEach((group, ind) => {
            const nameArray = group.querySelector('input[name="name[]"]');

            if (!nameArray.value && ind != 0) {
                group.remove()
            }

        })
    }

    if (remove_useless) {
        remove_useless.addEventListener('click', removeUselessRows)
    }

    // *** Função que gerencia os campos de selects multiples ***
    function runMultiSelector() {
        const multiSelector = document.querySelectorAll('.select-multiple-wrapper');

        if (multiSelector) {
            multiSelector.forEach(element => {
                const select = element.querySelector('.select-expand');
                const input = element.querySelector('.input-expand');
                const selectionBox = element.querySelector('.selection-box');

                if (select && input && selectionBox) {
                    // Verifica se os eventos já foram adicionados
                    if (!element.dataset.eventsAdded || element.dataset.eventsAdded === 'false') {
                        select.addEventListener('change', () => {
                            const selectedOptions = select.selectedOptions;
                            Array.from(selectedOptions).forEach(option => {
                                const selectionContainer = document.createElement('span');
                                selectionContainer.classList.add('selection');
                                const selection = document.createElement('p');
                                selection.setAttribute('data-value', option.text);
                                selection.setAttribute('data-name', 'selection[]');
                                selection.innerText = option.text;
                                option.style.display = 'none';

                                const closeIcon = document.createElement('span');
                                closeIcon.classList.add('close-icon');
                                closeIcon.textContent = 'x';
                                selectionContainer.appendChild(selection);
                                selectionContainer.appendChild(closeIcon);
                                selectionBox.appendChild(selectionContainer);

                                closeIcon.addEventListener('click', (e) => {
                                    option.style.display = 'block';

                                    e.target.closest('.selection').remove();
                                });
                            });

                            // const selectedText = Array.from(selectionBox.querySelectorAll('.selection'))
                            //     .map(selection => selection.textContent).join(', ');
                            // input.value = selectedText;
                        });


                        function openSelectionBox() {
                            select.style.display = 'block';
                        }

                        function closeSelectionBox(event) {
                            if (!input.contains(event.target) && !select.contains(event.target)) {
                                select.style.display = 'none';
                            }
                        }

                        // Adiciona os eventos apenas se ainda não foram adicionados
                        element.dataset.eventsAdded = true;
                        input.addEventListener('click', openSelectionBox);
                        document.addEventListener('click', event => {
                            if (!input.contains(event.target) && !select.contains(event.target)) {
                                select.style.display = 'none';
                            }
                        });
                    }
                }
            });
        }
    }

    runMultiSelector();


    // *** Funções de gerenciamento da estrutura que lida com o excel ***
    // function handleFileDrop(event) {
    //     const files = event.dataTransfer.files;
    //     handleFiles(files);
    // }

    // function handleFiles(files) {
    //     const formData = new FormData();
    //     for (let i = 0; i < files.length; i++) {
    //         formData.append('files', files[i]);
    //     }
    //     formData.append('type', '</?= $type ?>');
    //     fetch('</?= $formAction ?>', {
    //             method: 'POST',
    //             body: formData
    //         })
    //         .then(response => response.json())
    //         .then(data => {
    //             console.log(data)
    //         });
    // }
</script>

<?php $this->stop(); ?>