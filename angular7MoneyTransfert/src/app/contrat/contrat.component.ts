import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { Router, ActivatedRoute } from '@angular/router';
import * as jsPDF from 'jspdf';
import { Partenaire } from '../partenaire';

@Component({
  selector: 'app-contrat',
  templateUrl: './contrat.component.html',
  styleUrls: ['./contrat.component.css']
})
export class ContratComponent implements OnInit {

  contratPartenaire: Partenaire[];
  errorMessage: string;
   id = +this.route.snapshot.paramMap.get('id');
  constructor(private data: DataService, private router:Router,private route:ActivatedRoute) { }

  ngOnInit() {
    this.downloadContrat(this.id);
  }

  genPDF() {
    var doc = new jsPDF();
    
      var specialElementHandlers = {
          '#hidediv' : function(element,render) {return true;}
      };
      
      doc.fromHTML($('#contrat').get(0), 20,20,{
                   'width':500,
              'elementHandlers': specialElementHandlers
      });
    
    doc.save('Contrat.pdf');
    
  }


  downloadContrat(id){
    this.data.downloadContrat(id).subscribe(
      res=>{
      this.contratPartenaire=res
      //this.genPDF();
    },err=>this.errorMessage=err);
  }

}
