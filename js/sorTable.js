var sorTablejs = function(setting) {
    "use strict";

    //default
    var config = {
        
        targetTable: "table.table",
        cssAsc: "order-asc",
        cssDesc: "order-desc",
        cssBg: "sortable",
        selectorHeaders: "thead th"
    };

    
    if (setting instanceof String || typeof setting === "string") {
        config.targetTable = setting;
    }else if (typeof setting === "object") {
    
        Object.keys(setting).forEach(function(key) {
            config[key] = setting[key];
        });
    }

    
    /**
     * setEventToAllObject
     * 引数のエレメント全てに特定のイベントで発火する関数を定義する
     *
     * @param {HTMLElement} elem - 対象のエレメントの配列
     * @param {String} e - 対象のイベント
     * @param {Function} f - 発火する関数
     * @return なし
     */
    function setEventToAllObject(elem, e, f) {
        [...elem].map((v)=> {
            v.addEventListener(e, f, false);
        });
    }

    /**
    
     * @param {HTMLElement} elem 
     * @return {HTMLElement} 
     */
    function getTableElement(elem) {
       
        var f = th => {
            return th.tagName.toUpperCase() === "TABLE"? th : f(th.parentNode);
        };
        return f(elem.parentNode);
    }

    /**
     
     * @param {HTMLElement} tableElem 
     * @return {Array}
     */
    function getTableData(tableElem) {
        var data = [];
       
        for (var i = 1, l = tableElem.length; i < l; i++) {
            for (var j = 0, m = tableElem[i].cells.length; j < m; j++) {
                if (typeof data[i] === "undefined") {
                    data[i] = {};
                    data[i]["key"] = i; 
                }
                data[i][j] = tableElem[i].cells[j].innerText;
            }
        }
        return data;
    }

    /**
    
     * @param {Array} tableData 
     * @param {Int} colNo 
     * @param {Int} sortOrder 
     * @return {Array} 
     */
    function sortTableData(tableData, colNo, sortOrder) {
       
        return tableData.sort((a, b) => {
            if (a[colNo] < b[colNo]) {
                return -1 * sortOrder;
            }            
            if (a[colNo] > b[colNo]) {
                return sortOrder;
            }
            return 0;
        });
    }

    /**
     
     * @param {HTMLElement} table 
     * @param {Array} tableData 
     * @return 
     */
    function rewriteTableHTML(table, tableData) {
       
        var html = "";
        tableData.forEach(function(x) {
            html += table.querySelectorAll("tr")[x["key"]].outerHTML;
        });
        table.querySelector("tbody").innerHTML = html;
    }

    /**
     
     * @param {HTMLElement} table 
     * @param {Int} sortOrder
     * @return 
     */
    function removeTHClass(table, tableData) {
       
        var tableElem = table.querySelectorAll(config.selectorHeaders);
        Object.keys(tableElem).forEach(function(key) {
            tableElem[key].classList.remove(config.cssDesc);
            tableElem[key].classList.remove(config.cssAsc);
        });
    }

    /**
    
     * @param {HTMLElement} elem 
     * @param {Int} sortOrder 
     * @return 
     */
    function setTHClass(elem, sortOrder) {
        if (sortOrder === 1) {
            elem.classList.add(config.cssAsc);
        }else {
            elem.classList.add(config.cssDesc);
        }
    }

    /**
    
     * @param {HTMLElement} elem 
     * @return {boolean} 
     */
    function sortEvent(elem) {

       
        var table = getTableElement(elem);
        if (!table) {
            return;
        }

        
        var tableData = getTableData(table.querySelectorAll("tr"));

      
        var sortOrder = !elem.classList.contains(config.cssAsc) ? 1 : -1;

        
        tableData = sortTableData(tableData, elem.cellIndex, sortOrder);

        
        rewriteTableHTML(table, tableData);

        
        removeTHClass(table, tableData);
        setTHClass(elem, sortOrder);
    }

   
    window.addEventListener("load", function() {
        var elem = document.querySelector(config.targetTable).querySelectorAll(config.selectorHeaders);
        
        document.querySelector(config.targetTable).classList.add(config.cssBg);
        setEventToAllObject(elem, "click", function(e) {sortEvent(e.target); });
    }, false);

    return this;
};

sorTablejs();
