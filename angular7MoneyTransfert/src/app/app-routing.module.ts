import { NgModule } from '@angular/core';
import { Routes, RouterModule,CanActivate } from '@angular/router';
import { PartenaireComponent } from './partenaire/partenaire.component';
import { UsersComponent } from './users/users.component';
import { CompteComponent } from './compte/compte.component';
import { AddPartenaireComponent } from './add-partenaire/add-partenaire.component';
import { AddUserComponent } from './add-user/add-user.component';
import { AuthGuard } from './auth.guard';
import { LoginComponent } from './login/login.component';
import { NavbarComponent } from './navbar/navbar.component';
import { DepotComponent } from './depot/depot.component';
import { PasswordChangeComponent } from './password-change/password-change.component';
import { HistoriqueOperationComponent } from './historique-operation/historique-operation.component';
import { TransactionComponent } from './transaction/transaction.component';
import { EditUserComponent } from './edit-user/edit-user.component';
import {EditPartenaireComponent} from './edit-partenaire/edit-partenaire.component';
import { TransactionRetraitComponent } from './transaction-retrait/transaction-retrait.component';
import { AddCompteComponent } from './add-compte/add-compte.component';
import { PartenaireOperationComponent } from './partenaire-operation/partenaire-operation.component';
import { HomeComponent } from './home/home.component';
import { ContratComponent } from './contrat/contrat.component';
import { LogoutComponent } from './logout/logout.component';
import { UserInterfaceComponent } from './user-interface/user-interface.component';

const routes: Routes = [
  {path: '', redirectTo:'login',pathMatch:'full'},
  {path: 'home', component: HomeComponent},
  {path: 'login', component : LoginComponent},
  { path: 'logout', component: LogoutComponent},
  { path: 'partenaires', component: PartenaireComponent},
  { path: 'utilisateurs', component: UserInterfaceComponent},
  { path: 'compte', component: CompteComponent,canActivate:[AuthGuard]},
  { path: 'addCompte', component: AddCompteComponent},
  { path: 'addPartenaire', component: AddPartenaireComponent},
  { path: 'addUser', component: AddUserComponent},
  { path: 'addDepot/:id', component: DepotComponent},
  { path: 'passwordChange', component: PasswordChangeComponent},
  { path: 'UserOperations', component: HistoriqueOperationComponent},
  { path: 'envoiTransaction', component: TransactionComponent},
  { path: 'retraitTransaction', component: TransactionRetraitComponent},
  { path: 'editUser/:id', component: EditUserComponent},
  { path: 'editPartenaire/:id', component:  EditPartenaireComponent},
  { path: 'partenaireOperation', component: PartenaireOperationComponent},
  { path: 'partenaire/contrat/:id', component: ContratComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
