import { NgModule } from '@angular/core';
import { Routes, RouterModule,CanActivate } from '@angular/router';
import { PartenaireComponent } from './partenaire/partenaire.component';
import { UsersComponent } from './users/users.component';
import { CompteComponent } from './compte/compte.component';
import { AddPartenaireComponent } from './add-partenaire/add-partenaire.component';
import { AddUserComponent } from './add-user/add-user.component';
import { AuthGuard } from './auth.guard';

const routes: Routes = [
  { path: 'partenaires', component: PartenaireComponent},
  { path: 'utilisateurs', component: UsersComponent},
  { path: 'compte', component: CompteComponent},
  { path: 'addPartenaire', component: AddPartenaireComponent},
  { path: 'addUser', component: AddUserComponent,canActivate:[AuthGuard]}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
