import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Location } from '@angular/common';

@Component({
  selector: 'app-edit-partenaire',
  templateUrl: './edit-partenaire.component.html',
  styleUrls: ['./edit-partenaire.component.css']
})
export class EditPartenaireComponent implements OnInit {
 partenaireData={};
  constructor(private data:DataService, private router:Router, private route:ActivatedRoute) { }

  showPartenaireById(){
    const id = +this.route.snapshot.paramMap.get('id');
    console.log(id);
    this.data.showPartenaire(id).subscribe(
      data=>{
        this.partenaireData=data
    });
   }

   editPartenaire(){
    this.data.editPartenaire(this.partenaireData).subscribe(
      data=>{
        this.router.navigate(['/partenaires']);
    });
  }
  ngOnInit() {
    this.showPartenaireById();
  }
}
