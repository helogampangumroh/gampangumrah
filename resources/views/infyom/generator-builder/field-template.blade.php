<td class="align-middle">
    <input type="text" name="field_name" required class="form-control txtFieldName w100" />
</td>
<td class="align-middle">
    <select class="form-select txtdbType" name="txtdbType">
        <option value="increments">INCREMENTS</option>
        <option value="bigIncrements">BIG INCREMENTS</option>
        <option value="timestamps">TIME STAMPS</option>
        <option value="softDeletes">SOFT DELETES</option>
        <option value="rememberToken">REMEMBER TOKEN</option>
        <option disabled="disabled">-</option>
        <option value="string" selected="selected">STRING</option>
        <option value="text" class="text">TEXT</option>
        <option disabled="disabled">-</option>
        <option value="tinyInteger">TINY INTEGER</option>
        <option value="smallInteger">SMALL INTEGER</option>
        <option value="mediumInteger">MEDIUM INTEGER</option>
        <option value="integer">INTEGER</option>
        <option value="bigInteger">BIG INTEGER</option>
        <option disabled="disabled">-</option>
        <option value="float">FLOAT</option>
        <option value="decimal">DECIMAL</option>
        <option value="boolean">BOOLEAN</option>
        <option disabled="disabled">-</option>
        <option value="enum">ENUM</option>
        <option disabled="disabled">-</option>
        <option value="date">DATE</option>
        <option disabled="disabled">-</option>
        <option value="binary">BINARY</option>
    </select>

</td>
<td class="align-middle">
    <select class="form-select txtValidation w100" multiple name="txtValidation">
        <option value="required" class="required">Required</option>
        <option value="email" class="email">Email</option>
        <option value="date" class="date" disabled>Date</option>
        <option value="integer" class="integer">Integer</option>
        <option value="boolean" class="boolean" disabled>Boolean</option>
    </select>
</td>
<td class="align-middle">
    <select class="form-select drdHtmlType w100" name="drdHtmlType">
        <option value="text" class="text">Text</option>
        <option value="email" class="email1">Email</option>
        <option value="number" class="number1">Number</option>
        <option value="date" class="date1" disabled>Date</option>
        <option value="file" class="file1" disabled>File</option>
        <option value="password" class="password1">Password</option>
        <option value="select" class="select1">Select</option>
        <option value="radio" class="radio" disabled>Radio</option>
        <option value="checkbox" class="checkbox" disabled>Checkbox</option>
        <option value="textarea" class="textarea">TextArea</option>
    </select>
    <input type="text" class="form-control htmlValue txtHtmlValue d-none"placeholder="" />
</td>
<td class="align-middle">
    <div class="form-check text-center">
        <label class="ps-0">
            <input type="checkbox" class="flat-red chkPrimary ms-0" />
        </label>
    </div>
</td>
<td class="align-middle">
    <div class="form-check text-center">
        <label class="ps-0">
            <input type="checkbox" class="flat-red chkFillable ms-0" checked />
        </label>
    </div>
</td>
<td class="align-middle">
    <div class="form-check text-center">
        <label class="ps-0">
            <input type="checkbox" class="flat-red chkInForm ms-0" checked />
        </label>
    </div>
</td>
<td class="align-middle">
    <div class="form-check text-center">
        <label class="ps-0">
            <input type="checkbox" class="flat-red chkInIndex ms-0" checked />
        </label>
    </div>
</td>
<td class="text-center align-middle">
    <i onclick="removeItem(this)" class="livicon remove cursor-pointer " data-name="remove-alt" data-size="18"
        data-loop="true" data-c="#f56954" data-hc="#f56954"></i>
</td>
